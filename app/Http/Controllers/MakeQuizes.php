<?php

namespace App\Http\Controllers;

use App\Answer;
use App\Quiz;

class MakeQuizes extends Controller
{

    public $random_quiz = [];

    public function __construct()
    {
        $this->random_quiz = $this->makeRandomQuiz();
    }

    public function makeRandomQuiz()
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

        return $random_quiz;

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
