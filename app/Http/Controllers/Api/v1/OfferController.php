<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OfferController extends Controller
{
    public function store(Request $request): JsonResponse
    {
        $validated = validate($request->all(), Offer::$rules);

        $offer = (new Offer)->fillAttributes($validated);

        $offer->save();

        return response()->json($offer, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $offer = Offer::where('id', $id)->first();

        if (!$offer) {
            return response()->json('Offer does not exist', Response::HTTP_BAD_REQUEST);
        }
        $b24_manager_id = $request->get('b24_manager_id');
        if ($b24_manager_id) {
            $offer->setAttribute('b24_manager_id', $b24_manager_id);
        }
        $manager = $request->get('manager');
        if ($manager) {
            $offer->setAttribute('manager', $manager);
        }
        $position = $request->get('position');
        if ($position) {
            $offer->setAttribute('position', $position);
        }
        $avatar = $request->get('avatar');
        if ($avatar) {
            $offer->setAttribute('avatar', $avatar);
        }
        $status = $request->get('status');
        if ($status) {
            $offer->setAttribute('status', $status);
        }
        $date_end = $request->get('date_end');
        if ($date_end) {
            $offer->setAttribute('date_end', $date_end);
        }

        $offer->save();

        return response()->json($offer, Response::HTTP_OK);
    }
}
