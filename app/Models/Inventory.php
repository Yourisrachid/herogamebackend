<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = ['hero_id', 'item_id', 'quantity'];

    // Define the relationship with items
    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    // Define the relationship with heroes
    public function hero()
    {
        return $this->belongsTo(Hero::class);
    }
}
