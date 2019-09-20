<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddColumnTypeUserAnswer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_answer', function($table) {
           $table->string('type1')->default(0);
           $table->string('type2')->default(0);
           $table->string('type3')->default(0);
           $table->string('type4')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_answer', function ($table){
            $table->dropColumn('type1');
            $table->dropColumn('type2');
            $table->dropColumn('type3');
            $table->dropColumn('type4');
        });
    }
}
