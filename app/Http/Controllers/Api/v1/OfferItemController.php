<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;

use App\Models\OfferItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OfferItemController extends Controller
{

    public function store(Request $request): JsonResponse
    {
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
