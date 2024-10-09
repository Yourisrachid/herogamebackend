<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateHeroesTableWithStatsRaceAndFeats extends Migration
{
    public function up()
    {
        Schema::table('heroes', function (Blueprint $table) {
            // Adding stats columns
            $table->integer('strength')->default(0);
            $table->integer('dexterity')->default(0);
            $table->integer('constitution')->default(0);
            $table->integer('intelligence')->default(0);
            $table->integer('wisdom')->default(0);
            $table->integer('charisma')->default(0);
            
            // Adding currency column
            $table->integer('gold')->default(10);

            // Adding race column
            $table->string('race');

            // Adding feat column
            $table->string('feat')->nullable();
        });
    }

    public function down()
    {
        Schema::table('heroes', function (Blueprint $table) {
            // Dropping the added columns in reverse
            $table->dropColumn('strength');
            $table->dropColumn('dexterity');
            $table->dropColumn('constitution');
            $table->dropColumn('intelligence');
            $table->dropColumn('wisdom');
            $table->dropColumn('charisma');
            $table->dropColumn('gold');
            $table->dropColumn('race');
            $table->dropColumn('feat');
        });
    }
}
