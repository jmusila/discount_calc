<?php

namespace Database\Seeders;

use App\Models\GiftCard;
use App\Models\GiftCardType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        GiftCard::truncate();
        GiftCardType::truncate();
        GiftCardType::factory(5)->create();
        GiftCard::factory(5)->create();
    }
}
