<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $fillable = ['hero_id', 'choice_description', 'outcome'];

    public function hero()
    {
        return $this->belongsTo(Hero::class);
    }
}
