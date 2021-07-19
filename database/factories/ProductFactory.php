<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\ClassNso;
use App\Models\Product;
use App\Models\Server;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /** Ninja */
        // $imgPath = $this->faker->image(storage_path('app/public/uploads/nso'), $width = 800, $height = 600, 'nso', false);
        // return [
        //     "name" => $this->faker->lastName(),
        //     "lv" => rand(30, 130),
        //     "vip" => rand(0, 1),
        //     "signup" => 1,
        //     "class_id" => ClassNso::where('cate_id', 1)->get()->random()->id,
        //     "server_id" => Server::where('cate_id', 1)->get()->random()->id,
        //     "image" => "uploads/nso/" . $imgPath,
        //     "price" => rand(50000, 1000000),
        //     "intro" => 'Ninja Vip',
        //     "detail" => '...',
        //     "cate_id" => 1,
        // ];

        /** Ngọc rồng */
        // $imgPath = $this->faker->image(storage_path('app/public/uploads/nro'), $width = 800, $height = 600, 'nro', false);
        // return [
        //     "name" => $this->faker->lastName(),
        //     "exp" => '10 tỷ',
        //     "vip" => rand(0, 1),
        //     "signup" => 0,
        //     "class_id" => ClassNso::where('cate_id', 2)->get()->random()->id,
        //     "server_id" => Server::where('cate_id', 2)->get()->random()->id,
        //     "image" => "uploads/nro/" . $imgPath,
        //     "price" => rand(50000, 1000000),
        //     "intro" => 'Ngọc rồng Vip',
        //     "detail" => '...',
        //     "cate_id" => 2,
        // ];

        /**Làng lá */
        $imgPath = $this->faker->image(storage_path('app/public/uploads/llplk'), $width = 800, $height = 600, 'llplk', false);
        return [
            "name" => $this->faker->lastName(),
            "lv" => rand(50, 70),
            "weapon" => rand(12, 16),
            "vip" => rand(0, 1),
            "rank" => rand(0, 10),
            "signup" => 1,
            "class_id" => ClassNso::where('cate_id', 3)->get()->random()->id,
            "server_id" => Server::where('cate_id', 3)->get()->random()->id,
            "image" => "uploads/llplk/" . $imgPath,
            "price" => rand(50000, 1000000),
            "intro" => 'Làng lá Vip',
            "detail" => '...',
            "cate_id" => 3,
        ];
    }
}
