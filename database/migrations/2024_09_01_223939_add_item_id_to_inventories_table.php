<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddItemIdToInventoriesTable extends Migration
{
    public function up()
    {
        Schema::table('inventories', function (Blueprint $table) {
            if (!Schema::hasColumn('inventories', 'item_id')) {
                $table->foreignId('item_id')->constrained('items')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('inventories', function (Blueprint $table) {
            if (Schema::hasColumn('inventories', 'item_id')) {
                $table->dropForeign(['item_id']);
                $table->dropColumn('item_id');
            }
        });
    }
}
