<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Car;
use App\Models\CarModel;
use App\Models\CarType;
use App\Models\Color;
use App\Models\Generation;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

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

        CarModel::create([
            'name' => $faker->word,
        ]);

        Brand::create([
            'name' => $faker->word,
        ]);

        CarType::create([
            'name' => $faker->word,
        ]);

        Generation::create([
            'name' => $faker->word,
        ]);

        User::create([
            'name' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'password' => bcrypt('123456789'),
        ]);

        Color::create([
            'name' => $faker->colorName,
        ]);


        $images = [];
        for ($i = 0; $i < 10; $i++) {
            $images[] = $faker->imageUrl(640, 480, 'cars', true);
        }

        for ($i = 0; $i < 10; $i++) {
            Car::create([
                'car_model_id' => 1,
                'brand_id' => 1,
                'car_type_id' => 1,
                'generation_id' => 1,
                'user_id' => 1,
                'color_id_in' => 1,
                'color_id_out' => 1,
                'name' => $faker->unique()->word,
                'origin' => $faker->country,
                'min_km' => $faker->numberBetween(1000, 5000),
                'max_km' => $faker->numberBetween(5000, 10000),
                'year' => $faker->year,
                'mileage' => $faker->numberBetween(5000, 100000),
                'price' => $faker->randomFloat(2, 1000, 50000),
                'description' => $faker->paragraph,
                'gearbox' => $faker->randomElement(['manual', 'automatic']),
                'fuel' => $faker->randomElement(['diesel', 'essence', 'electric']),
                'number_of_doors' => $faker->numberBetween(2, 5),
                'number_of_places' => $faker->numberBetween(2, 7),
                'number_of_owners' => $faker->numberBetween(1, 5),
                'seats' => $faker->numberBetween(2, 7),
                'length' => $faker->numberBetween(3000, 5000),
                'techenical_control' => $faker->date(),
                'first_hand' => $faker->boolean,
                'release_date' => $faker->date(),
                'trunk_volume' => $faker->numberBetween(100, 1000),
                'upholstery' => $faker->word,
                'main_image' => $faker->imageUrl(),
                'images' => $images,
            ]);
        }
    }
}
