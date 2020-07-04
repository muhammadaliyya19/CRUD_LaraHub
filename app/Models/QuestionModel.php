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

    public static function getById($id)
    {
        $question = DB::table('questions')->where('id', '=', $id)->first();
        return $question;
    }

    public static function save($question)
    {
        $new_question = DB::table('questions')->insert($question);
        return 1;
    }

    public static function update($id, $request)
    {
        $question = DB::table('questions')->where('id', $id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'tanggal_diperbarui' => $request['tanggal_diperbarui']
        ]);
        return $question;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('questions')->where('id', $id)->delete();
        return $deleted;
    }
}
