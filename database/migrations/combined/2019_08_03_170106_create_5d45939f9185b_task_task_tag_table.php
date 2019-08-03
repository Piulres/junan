<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create5d45939f9185bTaskTaskTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('task_task_tag')) {
            Schema::create('task_task_tag', function (Blueprint $table) {
                $table->integer('task_id')->unsigned()->nullable();
                $table->foreign('task_id', 'fk_p_330739_330738_taskta_5d45939f919d6')->references('id')->on('tasks')->onDelete('cascade');
                $table->integer('task_tag_id')->unsigned()->nullable();
                $table->foreign('task_tag_id', 'fk_p_330738_330739_task_t_5d45939f91aca')->references('id')->on('task_tags')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_task_tag');
    }
}
