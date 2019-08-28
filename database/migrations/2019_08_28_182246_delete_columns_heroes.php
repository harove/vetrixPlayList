<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteColumnsHeroes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('heroes', function($table) {
            $table->dropColumn('hp');
            $table->dropColumn('attack');
            $table->dropColumn('defense');
            $table->dropColumn('luck');
            $table->dropColumn('coins');
            $table->dropColumn('xp');    
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}




