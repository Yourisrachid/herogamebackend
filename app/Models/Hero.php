<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name', 'class'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
