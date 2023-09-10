<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Mail\AdminContactNotification;
use App\Models\Brand;
use App\Models\Car;
use App\Models\City;
use App\Models\CommonQuestion;
use App\Models\Contact;
use App\Models\Favorite;
use App\Models\WebsiteSetting;
use App\Models\WebsiteStatic;
use App\Models\WhoUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontEndController extends Controller
{

    public function index()
    {
        $cars = Car::where('status', 'accepted')->get();
        $brands = Brand::all();
        $cities = City::select('name', 'id')->get();
        // dd($website);
        return view('website.index', compact('cars', 'brands', 'cities'));
    }

    public function showCar($id)
    {
        $car = Car::findorfail($id);
        $RandomCars = Car::inRandomOrder()->take(10)->get();

        return view('website.car', compact('car', 'RandomCars'));
    }

    public function showCarByImage($id)
    {
        $car = Car::where('id', $id)->first();

        $RandomCars = Car::inRandomOrder()->take(10)->get();

        return view('website.car', compact('car', 'RandomCars'));
    }

    public function AddToFavourite(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
        ]);
        $fav = Favorite::where('user_id', auth()->user()->id)->where('car_id', $request->car_id)->first();
        if ($fav) {
            Favorite::where('user_id', auth()->user()->id)->where('car_id', $request->car_id)->delete();
            return response()->json([
                'message' => __('dashboard.removed_from_fav_success'),
            ]);
        }
        Favorite::create([
            'user_id' => auth()->user()->id,
            'car_id' => $request->car_id,
        ]);
        return response()->json([
            'message' => __('dashboard.added_to_fav_success'),
        ]);
    }

    public function RemoveFromFavourite(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
        ]);
        Favorite::where('user_id', 11)->where('car_id', $request->car_id)->delete();
        return response()->json([
            'message' => __('dashboard.removed_from_fav_success'),
        ]);
    }


    public function helpCenter()
    {
        $questions = CommonQuestion::all();
        return view('website.commonquestions', compact('questions'));
    }


    //Search by car model or brand or year
    public function search(Request $request)
    {
        $cars = Car::when($request->search, function ($q) use ($request) {
            $q->whereHas('model', function ($qe) use ($request) {
                $qe->where('name', 'like', '%' . $request->search . '%')
                    ->orWhere('description', 'like', '%' . $request->search . '%');
            })
                ->orWhereHas('brand', function ($qe) use ($request) {
                    $qe->where('name', 'like', '%' . $request->search . '%');
                });
        })
            ->when($request->year, function ($q) use ($request) {
                $q->where('year', 'like', '%' . $request->year . '%');
            })
            ->when($request->city_id, function ($q) use ($request) {
                $q->where('city_id', $request->city_id);
            })
            //get price less than or equal to the amount
            ->when($request->amount, function ($q) use ($request) {
                $q->where('price', '<=', $request->amount);
            })
            //seats number , models , brands , colors in , color out , year , price
            ->when($request->seats, function ($q) use ($request) {
                $q->where('seats', 'like', '%' . $request->seats . '%');
            })
            ->when($request->colorin, function ($q) use ($request) {
                $q->whereHas('colorIn', function ($qe) use ($request) {
                    $qe->where('id', $request->colorin);
                });
            })
            ->when($request->colorout, function ($q) use ($request) {
                $q->whereHas('colorOut', function ($qe) use ($request) {
                    $qe->where('id', $request->colorout);
                });
            })
            ->when($request->models, function ($q) use ($request) {
                $q->whereHas('model', function ($qe) use ($request) {
                    $qe->where('name', 'like', '%' . $request->models . '%');
                });
            })
            ->when($request->brands, function ($q) use ($request) {
                $q->whereHas('brand', function ($qe) use ($request) {
                    $qe->where('name', 'like', '%' . $request->brands . '%');
                });
            })
            ->when($request->sort, function ($q) use ($request) {
                if ($request->sort == 2)
                    $q->orderBy('created_at', 'ASC');
                else
                    $q->orderBy('created_at', 'DESC');
            })
            ->when($request->sort, function ($q) use ($request) {
                if ($request->has('post_type')) {
                    $q->where('post_type', $request->post_type);
                }
            })
            ->paginate(15);
        return view('website.cars', compact('cars'));
    }

    public function showCars($modelId = null)
    {
        if ($modelId) {
            $cars = Car::where('brand_id', $modelId)->latest()->paginate(15);
            return view('website.cars', compact('cars'));
        }
        $cars = Car::latest()->paginate(15);
        return view('website.cars', compact('cars'));
    }

    public function aboutUs()
    {
        $about = WhoUs::first();
        return view('website.about', compact('about'));
    }

    public function terms()
    {
        $terms = WhoUs::first();
        return view('website.terms', compact('terms'));
    }


    public function contactus()
    {
        $contact = new Contact();
        $images = Car::inRandomOrder()->take(10)->get(['main_image', 'id']);

        return view('website.contact', compact('contact', 'images'));
    }


    public function storeContactus(Request $request)
    {
        $data = $request->all();
        $message = Contact::create($data);
        $email = WebsiteSetting::get('email');
        try {
            Mail::to($email)->send(new AdminContactNotification($data));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An error occurred while sending the message.');
        }

        return redirect()->back()->with('success', __('Message Sent Successfully!, We will contact you as soon as possiable.'));
    }
}
