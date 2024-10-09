<?php

namespace App\Http\Controllers;

use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    public function store(Request $request, $heroId)
    {
        $validated = $request->validate([
            'choice_description' => 'required|string',
            'outcome' => 'nullable|string'
        ]);

        $choice = Choice::create([
            'hero_id' => $heroId,
            'choice_description' => $validated['choice_description'],
            'outcome' => $validated['outcome']
        ]);

        return response()->json($choice, 201);
    }

    public function index($heroId)
    {
        $choices = Choice::where('hero_id', $heroId)->get();
        return response()->json($choices);
    }
}
