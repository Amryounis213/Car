<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\City;
use App\Models\Color;
use App\Models\Generation;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $faker = Faker::create();

        // CarModel::create([
        //     'name' => $faker->word,
        // ]);

        // Brand::create([
        //     'name' => $faker->word,
        // ]);

        // CarType::create([
        //     'name' => $faker->word,
        // ]);

        // Generation::create([
        //     'name' => $faker->word,
        // ]);

        // for ($i = 0; $i < 10; $i++) {
        //     User::create([
        //         'firstname' => $faker->name,
        //         'lastname' => $faker->name,
        //         'username' => $faker->unique()->name,
        //         'email' => $faker->unique()->safeEmail,
        //         'phone' => $faker->unique()->phoneNumber,
        //         'password' => bcrypt('123456789'),
        //     ]);
        // }

        // Color::create([
        //     'name' => $faker->colorName,
        // ]);


        // $images = [];
        // for ($i = 0; $i < 10; $i++) {
        //     $images[] = $faker->imageUrl(640, 480, 'cars', true);
        // }

        // for ($i = 0; $i < 10; $i++) {
        //     Car::create([
        //         'car_model_id' => 1,
        //         'brand_id' => 1,
        //         'car_type_id' => 1,
        //         'generation_id' => 1,
        //         'user_id' => rand(1, 3),
        //         'color_id_in' => 1,
        //         'color_id_out' => 1,
        //         'name' => $faker->unique()->word,
        //         'origin' => $faker->country,
        //         'min_km' => $faker->numberBetween(1000, 5000),
        //         'max_km' => $faker->numberBetween(5000, 10000),
        //         'year' => $faker->year,
        //         'mileage' => $faker->numberBetween(5000, 100000),
        //         'price' => $faker->randomFloat(2, 1000, 50000),
        //         'description' => $faker->paragraph,
        //         'gearbox' => $faker->randomElement(['manual', 'automatic']),
        //         'fuel' => $faker->randomElement(['diesel', 'essence', 'electric']),
        //         'number_of_doors' => $faker->numberBetween(2, 5),
        //         'number_of_places' => $faker->numberBetween(2, 7),
        //         'number_of_owners' => $faker->numberBetween(1, 5),
        //         'seats' => $faker->numberBetween(2, 7),
        //         'length' => $faker->numberBetween(3000, 5000),
        //         'techenical_control' => $faker->date(),
        //         'first_hand' => $faker->boolean,
        //         'release_date' => $faker->date(),
        //         'trunk_volume' => $faker->numberBetween(100, 1000),
        //         'upholstery' => $faker->word,
        //         'main_image' => $faker->imageUrl(),
        //         'images' => $images,
        //     ]);
        // }

        // $colors = [
        // ['name' => 'Red', 'hex_code' => '#FF0000'],
        // ['name' => 'Blue', 'hex_code' => '#0000FF'],
        // ['name' => 'Black', 'hex_code' => '#000000'],
        // ['name' => 'White', 'hex_code' => '#FFFFFF'],
        // ['name' => 'Silver', 'hex_code' => '#C0C0C0'],
        // ['name' => 'Gray', 'hex_code' => '#808080'],
        // ['name' => 'Green', 'hex_code' => '#00FF00'],
        // ['name' => 'Yellow', 'hex_code' => '#FFFF00'],
        // ['name' => 'Orange', 'hex_code' => '#FFA500'],
        // ['name' => 'Purple', 'hex_code' => '#800080'],
        // ['name' => 'Pink', 'hex_code' => '#FFC0CB'],
        // ['name' => 'Brown', 'hex_code' => '#A52A2A'],
        // ['name' => 'Teal', 'hex_code' => '#008080'],
        // ['name' => 'Cyan', 'hex_code' => '#00FFFF'],
        // ['name' => 'Lime', 'hex_code' => '#00FF00'],
        // ['name' => 'Magenta', 'hex_code' => '#FF00FF'],
        // ['name' => 'Indigo', 'hex_code' => '#4B0082'],
        // ['name' => 'Maroon', 'hex_code' => '#800000'],
        // ['name' => 'Olive', 'hex_code' => '#808000'],
        // ['name' => 'Navy', 'hex_code' => '#000080'],
        // ];
        // Add more colors as needed

        // for ($i=0; $i < 10; $i++) { 
        //     CarModel::create([
        //         'name' => 'Model'.$i,
        //     ]);
        // }

        // foreach ($colors as $color) {
        //     Color::create($color);
        // }
        // $response = Http::get('https://private-anon-18acadcf96-carsapi1.apiary-mock.com/manufacturers');

        // $brandsData = $response->json();

        // foreach ($brandsData as $brandData) {
        //     Brand::create([
        //         'name' => $brandData['name'],
        //         'icon' => $brandData['img_url'],
        //     ]);
        // }

        // Admin::create([
        //     'name' => 'SQYON',
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('123456789'),
        // ]);

        $data = file_get_contents('public/assets/data/WilayaList.json');
        $citiesData = json_decode($data, true); // Convert JSON to PHP array
        
        
        foreach ($citiesData as $cityData) {
            // Extract the relevant data for the City model
            $cityCode = $cityData['mattricule'];
            $cityName = $cityData['name'];
            $cityNameAr = $cityData['name_ar'];
            $cityNameEn = $cityData['name_en'];
            $cityNameEn = $cityData['name_en'];
        
            // Assuming postal codes are available, you can extract them too
            // $postalCodes = $cityData['postalCodes'];
        
            // Create a new City record
            City::create([
                // 'code' => $cityCode,
                // 'name' => $cityName,
                'name' => [
                    'ar' => $cityNameAr,
                    'en' => $cityNameEn,
                ],
                // If you have postal codes, add them here as well
                // 'postal_code' => json_encode($postalCodes),
            ]);
        }
              
        
    }
}
