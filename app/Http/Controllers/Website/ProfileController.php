<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Amenity;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\City;
use App\Models\Color;
use App\Models\Generation;
use App\Models\Image;
use App\Models\User;
use App\Models\WebsiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user(); // Auth User
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
        //validate the data
        $this->validate($request, array(
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|unique:users,email,' . $id,
            'phone' => 'required|unique:users,phone,' . $id,
        ));

        $data = $request->all();

        $user = User::findorfail($id);
        $input = $user->update($data);
        // dd($input);
        return redirect()->back()->with('message', 'Data Updated Successfully');
    }

    public function updatePassword(Request $request)
    {
        // return $request->all();
        //validate the data
        $this->validate($request, array(
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ));
        if (!(Hash::check($request->get('old_password'), Auth::user()->password))) {
            // The passwords matches
          
            return redirect()->back()->with('error', "Your current password does not matches with the password you provided. Please try again.");
        }
        $data = $request->all();

        $user = User::findorfail(Auth::id());
        $input = $user->update($data);
      
        return redirect()->back()->with('success', 'Password Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Car::findOrFail($id);

        $user->delete();

        return redirect()->back()->with('success', 'Car Deleted Successfully');
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
        $cities = City::select('id', 'name')->get();
        // dd($cities);
        return view('website.addproduct', compact('car', 'models', 'brands', 'carTypes', 'generation', 'carColors', 'amenities', 'images', 'cities'));
    }


    public function storePost(Request $request)
    {
        $request->validate([
            'car_model_id' => 'required|exists:car_models,id',
            'brand_id' => 'required|exists:brands,id',
            // 'car_type_id' => 'required|exists:car_types,id',
            'generation_id' => 'required|exists:generations,id',
            // 'user_id' => 'required|exists:users,id',
            'color_id_in' => 'nullable|exists:colors,id',
            'color_id_out' => 'nullable|exists:colors,id',
            // 'name' => 'required|unique:cars,name',
            'origin' => 'nullable',
            'min_km' => 'nullable|integer|min:0',
            'max_km' => 'nullable|integer|min:' . ($request->input('min_km') ?: 0),
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),
            'mileage' => 'nullable|integer|min:0',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'gearbox' => 'required|in:manual,automatic',
            // 'fuel' => 'required|in:Diesel,Essence,Electric',
            'number_of_doors' => 'nullable|integer|min:1',
            'number_of_places' => 'nullable|integer|min:1',
            'number_of_owners' => 'nullable|integer|min:0',
            'seats' => 'nullable|integer|min:1',
            'length' => 'nullable|integer|min:1',
            'main_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'images.*' => 'required',
            'techenical_control' => 'nullable|string',
            'first_hand' => 'nullable|boolean',
            'release_date' => 'nullable|date',
            'trunk_volume' => 'nullable|integer|min:0',
            'upholstery' => 'nullable|string',
        ], [
            'car_model_id.required' => 'The car model field is required.',
            'brand_id.required' => 'The brand field is required.',
            'car_type_id.required' => 'The car type field is required.',
            'generation_id.required' => 'The generation field is required.',
            'user_id.required' => 'The user field is required.',
            'name.required' => 'The name field is required.',
            'name.unique' => 'The name already exists.',
            'min_km.integer' => 'Minimum kilometer value must be an integer.',
            'max_km.integer' => 'Maximum kilometer value must be an integer.',
            'year.integer' => 'Year must be a valid year.',
            'mileage.integer' => 'Mileage must be an integer.',
            'price.numeric' => 'Price must be a number.',
            'gearbox.required' => 'The gearbox field is required.',
            'fuel.required' => 'The fuel field is required.',
            'images.*.image' => 'The images must be an image.',
            'images.required' => 'Please add images.',
            'images.*.mimes' => 'The images must be a file of type: jpeg, png, jpg, gif.',
            'images.*.max' => 'The images may not be greater than 2048 kilobytes.',
            // Add more custom error messages here for other fields
        ]);

        $user = User::find(auth()->id());
        if($user->post_attempts <= 0)
        {
            return redirect()->back()->with('error', 'You have reached your maximum post limit. Please contact the administrator.');
        }
        
        // $this->Brand->name . ' - ' . $this->Model->name . ' - ' . $this->CarTypes->name . ' - ' . $this->Generations->name ;
        $name = $request->brand_id . ' - ' . $request->car_model_id . ' - ' . $request->car_type_id . ' - ' . $request->generation_id . uniqid('-');
        $car = Car::create([
            'car_model_id' => $request->car_model_id,
            'car_type_id' => $request->car_type_id,
            'generation_id' => $request->generation_id ,
            'brand_id' => $request->brand_id ,
            'year' => $request->year,
            'number_of_doors' => $request->number_of_doors,
            'number_of_owners' => $request->number_of_owners,
            'name' => $name,
            'description' => $request->description,
            'user_id' => auth()->id(),
            'price' => $request->price,
            'gearbox' => $request->gearbox,
            'fuel' => $request->fuel,
            'mileage' => $request->mileage,
            'seats' => $request->seats,
            'length' => $request->length,
        ]);

        // If it is a Mechanical Item
        if($request->post_type == 0){
            $car->post_type = 0;
            $car->save();
        }

        $website = WebsiteSetting::first();

        if($website->accept_posts == 'auto'){
            $car->status = 'accepted';
            $car->save();
        }

        $user->post_attempts = $user->post_attempts - 1;
        $user->save();


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
        return redirect()->route('account.index')->with('success', 'Car Added Successfully');
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
