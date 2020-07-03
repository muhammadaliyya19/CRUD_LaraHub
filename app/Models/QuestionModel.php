<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionModel
{
    public static function getAll()
    {
        $question = DB::table('questions')->get();
        return $question;
    }

    public static function save($question)
    {
        $new_question = DB::table('questions')->insert($question);
        echo "SAMPAI MODEL CUK !";
        return $new_question;
    }
}
