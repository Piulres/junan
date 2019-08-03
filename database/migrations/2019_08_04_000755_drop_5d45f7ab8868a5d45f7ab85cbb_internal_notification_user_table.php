<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5d45f7ab8868a5d45f7ab85cbbInternalNotificationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('internal_notification_user');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('internal_notification_user')) {
            Schema::create('internal_notification_user', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('internal_notification_id')->unsigned()->nullable();
            $table->foreign('internal_notification_id', 'fk_p_330731_330729_user_i_5d451eb6bb6f6')->references('id')->on('internal_notifications');
                $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id', 'fk_p_330729_330731_intern_5d451eb6baa54')->references('id')->on('users');
                
                $table->timestamps();
                
            });
        }
    }
}
