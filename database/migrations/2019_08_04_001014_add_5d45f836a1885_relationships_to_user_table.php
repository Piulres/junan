<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5d45f836a1885RelationshipsToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function(Blueprint $table) {
            if (!Schema::hasColumn('users', 'team_id')) {
                $table->integer('team_id')->unsigned()->nullable();
                $table->foreign('team_id', '330729_5d45f8316b381')->references('id')->on('teams')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function(Blueprint $table) {
            
        });
    }
}
