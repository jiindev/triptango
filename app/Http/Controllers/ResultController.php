<?php

namespace App\Http\Controllers;

use App\UserAnswer;
use Exception;
use Illuminate\Http\Request;

class ResultController
{
    public function index(Request $request)
    {
        try{

            $email = $request['email'];

            if (empty($email)) {
                throw new Exception('잘 못된 접근입니다.');
            }

            $result = UserAnswer::where('user_id', $email)->get();

            foreach ($result as $row) {
                dump('퀴즈'.$row->question_id, '답변'.$row->answer_id);
            }

        } catch (Exception $e) {
        }
    }

}
