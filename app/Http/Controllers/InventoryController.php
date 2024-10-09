<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use App\Models\Item;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    // Add an item to the hero's inventory
    public function addItem(Request $request, $heroId)
    {
        $validated = $request->validate([
            'item_id' => 'required|exists:items,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $inventory = Inventory::create([
            'hero_id' => $heroId,
            'item_id' => $validated['item_id'],
            'quantity' => $validated['quantity']
        ]);

        return response()->json($inventory, 201);
    }

    // Remove an item from the hero's inventory
    public function removeItem($heroId, $itemId)
    {
        $inventory = Inventory::where('hero_id', $heroId)->where('item_id', $itemId)->firstOrFail();
        $inventory->delete();

        return response()->json(['message' => 'Item removed from inventory.']);
    }
}
