<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    // Create a new hero
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'class' => 'required|in:warrior,mage,rogue',
            'strength' => 'required|integer',
            'dexterity' => 'required|integer',
            'constitution' => 'required|integer',
            'intelligence' => 'required|integer',
            'wisdom' => 'required|integer',
            'charisma' => 'required|integer',
            'race' => 'required|string|in:human,elf,dwarf,halfling',
            'feat' => 'required|string|in:Nyctalope,Solide,Adaptable,Avenant,Ami des bêtes',
        ]);
    
        $hero = Hero::create([
            'user_id' => auth()->id(),
            'name' => $validated['name'],
            'class' => $validated['class'],
            'strength' => $validated['strength'],
            'dexterity' => $validated['dexterity'],
            'constitution' => $validated['constitution'],
            'intelligence' => $validated['intelligence'],
            'wisdom' => $validated['wisdom'],
            'charisma' => $validated['charisma'],
            'gold' => 10, // Starting gold
            'race' => $validated['race'],
            'feat' => $validated['feat'],
        ]);
    
        // Apply race and feat bonuses here
        $this->applyRaceBonuses($hero);
        $this->applyFeatBonuses($hero);
    
        return response()->json($hero, 201);
    }
    
    private function applyRaceBonuses(Hero $hero)
    {
        switch ($hero->race) {
            case 'human':
                $hero->strength += 2;
                $hero->dexterity += 2;
                break;
            case 'elf':
                $hero->charisma += 2;
                $hero->wisdom += 2;
                break;
            case 'dwarf':
                $hero->strength += 2;
                $hero->constitution += 2;
                break;
            case 'halfling':
                $hero->dexterity += 2;
                $hero->wisdom += 2;
                break;
        }
        $hero->save();
    }
    
    private function applyFeatBonuses(Hero $hero)
    {
        if ($hero->feat === 'Solide') {
            $hero->strength += 1;
            $hero->constitution += 1;
        } elseif ($hero->feat === 'Adaptable') {
            $hero->dexterity += 1;
            $hero->wisdom += 1;
        } elseif ($hero->feat === 'Avenant') {
            $hero->intelligence += 1;
            $hero->charisma += 1;
        } elseif ($hero->feat === 'Nyctalope') {
            // Add item in inv?
        } elseif ($hero->feat === 'Ami des bêtes') {
            // Add familiar in inv?
        }
        $hero->save();
    }
    
    

    // Retrieve a specific hero
    public function show($id)
    {
        $hero = Hero::findOrFail($id);
        return response()->json($hero);
    }

    // Update a hero
    public function update(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);
        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'class' => 'sometimes|required|in:warrior,mage,rogue'
        ]);

        $hero->update($validated);
        return response()->json($hero);
    }

    // Delete a hero
    public function destroy($id)
    {
        $hero = Hero::findOrFail($id);
        $hero->delete();
        return response()->json(['message' => 'Hero deleted successfully.']);
    }
}
