<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5d45f7afdcde4InternalNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('internal_notifications');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('internal_notifications')) {
            Schema::create('internal_notifications', function (Blueprint $table) {
                $table->increments('id');
                $table->string('text');
                $table->string('link')->nullable();
                
                $table->timestamps();
                
            });
        }
    }
}
