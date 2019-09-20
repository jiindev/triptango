<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class AddColumnTypeAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * 소비범위 1, 2, 4, 5
    활동성 3, 4, 6
    즉흥성 2, 3
    가치 6
     */
    public function up()
    {
        Schema::table('answers', function ($table){
            $table->integer('type1');
            $table->integer('type2');
            $table->integer('type3');
            $table->integer('type4');
        });

        DB::table('answers')->whereIn('id',[2,3,7,10])->update([
            'type1' => 1,
        ]);

        DB::table('answers')->whereIn('id',[5,8,11])->update([
            'type2' => 1,
        ]);

        DB::table('answers')->whereIn('id',[3,5])->update([
            'type3' => 1,
        ]);

        DB::table('answers')->whereIn('id',[11])->update([
            'type4' => 1,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('answers', function ($table){
            $table->dropColumn('type1');
            $table->dropColumn('type2');
            $table->dropColumn('type3');
            $table->dropColumn('type4');
        });
    }
}
