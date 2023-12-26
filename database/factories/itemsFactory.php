<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Auth;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\items>
 */
class itemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $randimg=[
            '1.png',
            '2.png',
            '3.png',
            '4.png',
            '5.png',
            '6.png',
            '7.png',
            '8.png',
            '9.png',
            '10.png',
            '11.png',
            '12.png',
            '13.png',
            '14.png',
            '15.png',
            '16.png',
            '17.png',
            '18.png',
            '19.png',
            '20.png',


        ];


        return [
   'title' => $this->faker->sentence,
   'slug' => $this->faker->sentence,
   'brand' => $this->faker->sentence,
   'category' => $this->faker->numberBetween(1, 100),
   'created_by'=>1,
   'discription'=>$this->faker->paragraph,
   'price'=>$this->faker->numberBetween(2000,20000),
   'dCharges'=>$this->faker->numberBetween(100,700),
   'image'=>$randimg[rand(0,19)],
   'image2'=>$randimg[rand(0,19)],
   'image3'=>$randimg[rand(0,19)],
   'image4'=>$randimg[rand(0,19)],
   'image5'=>$randimg[rand(0,19)],




];
    }
}
