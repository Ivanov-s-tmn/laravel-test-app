<?php

namespace App\Http\Controllers;

use App\Models\OfferItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OfferItemsController extends Controller
{
    public function index() {
        $offerItems = OfferItem::all();

        return view('index')->with('offerItems', $offerItems);
    }
}
