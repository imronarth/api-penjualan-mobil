<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'merk' => $this->faker->name,
            'seri' => $this->faker->name,
            'silinder' => $this->faker->name,
            'tipe' => $this->faker->name,
            'sub_tipe' => "",
            'transmisi' => "AT",
            'tahun'=> $this->faker->dateTimeThisYear,
            'bahan_bakar'=> "BENSIN",
            'penggerak'=> "4X2",
        ];
    }
}
