<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    public function getAnswerByQuizId(int $id)
    {
        if (!empty($id)) {
            self::where('id',$id)->get();
        }
    }
}
