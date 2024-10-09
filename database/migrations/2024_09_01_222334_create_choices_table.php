<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChoicesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('choices')) {
            Schema::create('choices', function (Blueprint $table) {
                $table->id();
                $table->foreignId('hero_id')->constrained()->onDelete('cascade');
                $table->text('choice_description');
                $table->text('outcome')->nullable();
                $table->timestamps();
            });
        }
    }
    

    public function down()
    {
        Schema::dropIfExists('choices');
    }
}
