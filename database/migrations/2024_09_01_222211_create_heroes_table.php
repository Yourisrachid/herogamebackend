<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('heroes')) {
            Schema::create('heroes', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->string('name');
                $table->enum('class', ['warrior', 'mage', 'rogue']); // ENUM check for hero class
                $table->timestamps();
            });
        }
    }
    

    public function down()
    {
        Schema::dropIfExists('heroes');
    }
}
