<?php

namespace Database\Factories;

use App\Models\item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $faker->sentence,
            'halaman' => $faker->number(0,1000),
            'waktu' => $faker->number(0,1000),
            'isi' =>$faker->paragraph,
        ];
    }
}
