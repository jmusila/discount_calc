<?php

namespace Database\Factories;

use App\Models\GiftCardType;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiftCardTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GiftCardType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'max_avail_value' => $this->faker->numberBetween(20, 100)
        ];
    }
}
