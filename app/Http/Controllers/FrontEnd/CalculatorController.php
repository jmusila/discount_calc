<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\GiftCard;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    /**
     * Handle Frontend Calculator
     *
     * @return View
     */
    public function index()
    {
        $gifts = GiftCard::all();

        

        return view('welcome')->with('gifts', $gifts);
    }
}
