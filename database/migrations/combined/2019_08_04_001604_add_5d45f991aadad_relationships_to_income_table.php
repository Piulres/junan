<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5d45f991aadadRelationshipsToIncomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('incomes', function(Blueprint $table) {
            if (!Schema::hasColumn('incomes', 'income_category_id')) {
                $table->integer('income_category_id')->unsigned()->nullable();
                $table->foreign('income_category_id', '330744_5d4520e6b1076')->references('id')->on('income_categories')->onDelete('cascade');
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
        Schema::table('incomes', function(Blueprint $table) {
            if(Schema::hasColumn('incomes', 'income_category_id')) {
                $table->dropForeign('330744_5d4520e6b1076');
                $table->dropIndex('330744_5d4520e6b1076');
                $table->dropColumn('income_category_id');
            }
            
        });
    }
}
