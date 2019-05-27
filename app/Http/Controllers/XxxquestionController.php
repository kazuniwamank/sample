<?php

namespace App\Http\Controllers;

use App\XxxQuestion;
use App\XxxAnswer;
use Illuminate\Http\Request;

class XxxquestionController extends Controller
{
    public function index()
    {
        $query = XxxQuestion::query();
        $query->where('end_date','<=','9999-12-31')
              ->Where('start_date', '>', now());
        $questions = $query->get();
        \Log::info(var_export($questions, true));
        return view('question', ['questions' => $questions]);
    }

    public function registe(Request $request)
    {
        $all = $request->all();
        \Log::info(var_export($all, true));

        foreach ($all as $element => $element2) {
            $xxxanswer = new XxxAnswer;
            $name = $all['name'];
            if ($element == 'answer') {
                foreach ($element2 as $qid =>$value) {
                    \Log::info(var_export($all['answer'][$qid]['qid'], true));
                    $xxxanswer = new XxxAnswer;
                    $xxxanswer->name  = $name;
                    $xxxanswer->qid = (int)$all['answer'][$qid]['qid'];
                    $xxxanswer->answer_value = $all['answer'][$qid]['answer_value'];
                    $xxxanswer->comment =$all['answer'][$qid]['comment'];
                    $xxxanswer->save();

                }


            }
        }

        return view('/answer');
    }




}
