<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiftCard extends Model
{
    use HasFactory;

    /**
     * Get url
     *
     * @return URL
     */
    public static function baseUrl()
    {
        return "http://127.0.0.1:8000" . "/api/payment_calculation";
    }
}
