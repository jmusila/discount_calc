<?php

namespace App\Http\Controllers;

use App\Http\Requests\GiftCardRequest;
use App\Models\GiftCard;
use App\Models\GiftCardType;
use Illuminate\Support\Facades\DB;

class GiftCalculatorController extends Controller
{
    /**
     * Calculate the Total Cart Payment after the Discount
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function calculatePayment(GiftCardRequest $request)
    {
        $cart_total = $request->input('cart_total');

        $gift_card_ids = $request->input('gift_card_ids', []);

        if (!empty($cart_total)) {
            $discount = $this->calculateDiscount($cart_total, $gift_card_ids);

            return $discount;
        } else {
            return response()->json([
                'status' => 'error',
                'msg' => 'Total Cart cannot be empty.'
            ], 422);
        }
    }

    /**
     * Handle the Calculation
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function calculateDiscount($cart_total, $gift_card_ids)
    {
        $giftCardsTable = (new GiftCard())->getTable();

        $giftCardTypesTable = (new GiftCardType())->getTable();

        $gifts = DB::table($giftCardsTable)
                ->whereIn($giftCardsTable . '.type_id', $gift_card_ids)
                ->join($giftCardTypesTable, $giftCardsTable . '.type_id', '=', $giftCardTypesTable . '.id')
                ->get();

        if ($gifts->count() > 1) {
            $discount = $gifts->map(function ($gift_card) {
                return $gift_card->max_avail_value/100 * $gift_card->value;
            })->sum();
        } else {
            $discount = $gifts->map(function ($gift_card) {
                return $gift_card->value;
            })->sum();
        }

        $payable_amount = $cart_total - $discount;

        return response()->json([
                'status' => 'success',
                'gifts' => $gifts,
                'discount' => $discount,
                'total_cart' => $cart_total,
                'payable_amount' => $payable_amount,
                'gift_discount' => $discount
        ], 200);
    }

    public function getCalculation(GiftCardRequest $request)
    {
        $calculation = $this->calculatePayment($request);

        $calculation = json_encode($calculation);

        $calculation = json_decode($calculation);

        $calculation = collect($calculation)->flatten();

        return view('calculation')->with('calculation', $calculation);
    }
}
