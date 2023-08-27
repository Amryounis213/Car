<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\Color;
use App\Models\Generation;
use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::first(); // Auth User
        $mycars = Car::where('user_id', $user->id)->get();
        $car = Car::first();

        $favCarIds = $user->favorites->pluck('car_id');

        $favCars = Car::whereIn('id', $favCarIds)->get();

        return view('website.account', compact('favCars', 'user', 'mycars', 'car'));
    }

    public function getFavCars()
    {

        $user = User::first(); // Auth User

        $favCarIds = $user->favorites->pluck('car_id');

        $favCars = Car::whereIn('id', $favCarIds)->get();

        return response()->json($favCars);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 123;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $user = User::findorfail($id);
        $input = $user->update($data);
        // dd($input);
        return redirect()->back()->with('message', 'Data Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function createPost()
    {
        $car = new Car();
        $models = CarModel::select('id', 'name')->get();
        $brands = Brand::select('id', 'name')->get();
        $carTypes = CarType::select('id', 'name')->get();
        $generation = Generation::select('id', 'name')->get();
        $carColors = Color::select('id', 'name')->get();
        $amenities = Amenity::get();
        $images = Car::inRandomOrder()->take(10)->get(['main_image', 'id']);
        // dd($images);
        return view('website.addproduct', compact('car', 'models', 'brands', 'carTypes', 'generation', 'carColors', 'amenities', 'images'));
    }


    public function storePost(Request $request)
    {
        // dd($request->all());
        // Log::info('Image ID From Post [] : ' . $this->imagesIds); 
        // $imagesIds = Session::get('imagesIds') ;
        // return $imagesIds;
        // $user = auth()->user()->post_attempts;

        $car = Car::create([
            'car_model_id' => $request->car_model_id,
            'car_type_id' => 1,
            'generation_id' => 1,
            'brand_id' => 1,
            'year' => $request->year,
            'number_of_doors' => $request->number_of_doors,
            'number_of_owners' => $request->number_of_owners,
            'user_id' => 1,
            'name' => 'sadfaddssdsdsdsddsdsasddf' . $request->description,
            'description' => $request->description,
            // 'images' => $data['images']
        ]);


        if ($request->images) {
            $carImages = [];
            foreach ($request->images as $key => $image) {
                $images = Image::where('folder', $image)->first();
                $carImages[$key] = $images->image;
            }
            $car->images = $carImages;
            $car->main_image = $carImages[0];
            $car->save();
        }
        return redirect()->back();
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('images')) {
            $folder = uniqid('car_', true);
            foreach ($request->images as $key => $image) {
                $image_path = $request->file('images')[$key]->store('uploads/images/' . $folder, 'public');
                $imageModel = Image::create([
                    'image' => $image_path,
                    'folder' => $folder,
                ]);
            }

            return $folder;
        }
    }


    public function contactus(Request $request)
    {
        //
    }

    public function contact(Request $request)
    {
        $data = $request->all();
        //store
        return redirect()->route('website.home');
    }
}
