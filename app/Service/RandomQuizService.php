<?php
/**
 * Created by PhpStorm,
 * User: 63328
 * Date: 2019-08-31
 * Time: 오후 2:18
 */

namespace App\Service;

use App\Answer;
use App\Quiz;
use Illuminate\Support\Facades\Cache;

class RandomQuizService implements RandomQuizInterface
{
    public function MakeRandomQuiz()
    {
        $all_quiz = Quiz::all();
        $quizs = [];
        foreach ($all_quiz as $row) {
            $answer = Answer::where('quiz_id', $row->getAttributes()['id'])->get()->toArray();
            $quizs[] = [
                'id' => $row->getAttributes()['id'],
                'quiz' => $row->getAttributes()['text'],
                'answer' => $answer,
            ];

        }

        $random_quiz = $this->randomQuiz($quizs);

        Cache::put('random_quiz', $random_quiz, now()->addMinute(20));
    }

    public function randomQuiz(array $quizs)
    {
        shuffle($quizs);

        $random_quiz = [];
        for ($i = 0; $i<count($quizs); $i++) {
            $random_quiz[] = $quizs[$i];
        }

        return $random_quiz;
    }
}
