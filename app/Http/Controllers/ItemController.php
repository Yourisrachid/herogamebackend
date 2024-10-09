<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    // List all available items
    public function index()
    {
        $items = Item::all();
        return response()->json($items);
    }
}
