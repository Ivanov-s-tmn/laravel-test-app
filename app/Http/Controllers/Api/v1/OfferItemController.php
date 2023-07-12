<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

use App\Models\Offer;
use App\Models\OfferItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OfferItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request): JsonResponse
    {
        //Идем за подборкой в БД по offer_id элемента подборки
        $offer = Offer::where('id', $request->get('offer_id'))->first();

        //Проверка статуса подборки
        if ($offer->status != 'New') {
            return response()->json('Offer status is not New', Response::HTTP_BAD_REQUEST);
        }

        $validated = validate($request->all(), OfferItem::$rules);
        $item = (new OfferItem)->fillAttributes($validated);

        $item->save();

        return response()->json($item, Response::HTTP_CREATED);
    }

    public function destroy($offerItemId)
    {
        $offerItem = OfferItem::where('id', $offerItemId)->first();

        $offerItem->delete();

        return response()->noContent();
    }
}
