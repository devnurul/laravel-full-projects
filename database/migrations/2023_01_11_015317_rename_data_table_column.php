<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("all_table", function( Blueprint $table){
            $table->renameColumn('votes', 'userName');
        });
        Schema::table("students", function( Blueprint $table){
            $table->dropColumn('city');
        });
    }

    // this is commented out for backwards compatibility
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       
    }
};
