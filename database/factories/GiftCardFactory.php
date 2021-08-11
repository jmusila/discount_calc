<?php

namespace Database\Factories;

use App\Models\GiftCard;
use App\Models\GiftCardType;
use Illuminate\Database\Eloquent\Factories\Factory;

class GiftCardFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = GiftCard::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type_id' => function () {
                return GiftCardType::factory()->create()->id;
            },
            'value' => 100
        ];
    }
}
