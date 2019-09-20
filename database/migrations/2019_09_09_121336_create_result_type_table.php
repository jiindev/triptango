<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResultTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('result_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code_type');
            $table->string('memo');
            $table->timestamps();
        });

        DB::table('result_type')->insert(['code_type' => 'type1', 'memo' => '소비범위']);
        DB::table('result_type')->insert(['code_type' => 'type2', 'memo' => '활동성']);
        DB::table('result_type')->insert(['code_type' => 'type3', 'memo' => '즉흥석']);
        DB::table('result_type')->insert(['code_type' => 'type4', 'memo' => '가치']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('result_type');
    }
}
