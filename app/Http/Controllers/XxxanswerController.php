<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\XxxAnswer;
class XxxanswerController extends Controller
{
    public function index()
    {/*
        $query = ::query();
        $query->where('end_date', '9999-12-31');
        $ = $query->get();
        \Log::info(var_export($, true));
        return view('', ['' => $]);
    */
    }

    public function registe(Request $request)
    {
        $all = $request->all();
        \Log::info(var_export($all, true));

        foreach ($all as $element => $element2) {
            if ($element == 'answer') {
                foreach ($element2 as $qid => $culomns) {
                    $xxxanswer = new App\XxxAnswer;
                    $xxxanswer->name = $all[name];
                    if ($culomns = 'qid') {
                        $xxxanswer->qid = $culomns;
                    } elseif ($culomns = 'answer_value') {
                        $xxxanswer->answer_value = $culomns;
                    } elseif ($culomns = 'comment') {
                        $xxxanswer->comment = $culomns;
                    }
                    $xxxanswer->save();
                }
            }
        }

        return view('/answer');
    }

}
