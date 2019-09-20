<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quiz_id');
            $table->string('text');
            $table->timestamps();
        });

        $data = [
            ['quiz_id' => 1, 'text' => "공금"],
            ['quiz_id' => 1, 'text' => "사비"],
            ['quiz_id' => 2, 'text' => "펑펑"],
            ['quiz_id' => 2, 'text' => "아껴서"],
            ['quiz_id' => 3, 'text' => "즉흥적"],
            ['quiz_id' => 3, 'text' => "계획적"],
            ['quiz_id' => 4, 'text' => "호텔"],
            ['quiz_id' => 4,'text' => "게스트하우스"],
            ['quiz_id' => 5, 'text' => "자동차"],
            ['quiz_id' => 5, 'text' => "뚜벅이"],
            ['quiz_id' => 6, 'text' => "관광"],
            ['quiz_id' => 6, 'text' => "휴양"],
        ];

        DB::table('answers')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
