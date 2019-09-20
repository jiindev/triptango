<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('text');
            $table->timestamps();
        });

        $data = [
            ['text' => "돈은 어떻게 쓸까?"],
            ['text' => "돈은 많이 쓸까? 아껴쓸까?"],
            ['text' => "여행계획은 어떻게 세우는 편이야?"],
            ['text' => "숙박은 어디서 할까?"],
            ['text' => "뭐타고 다닐래?"],
            ['text' => "휴양이 좋아 관광이 좋아?"],
        ];

        DB::table('quiz')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz');
    }
}
