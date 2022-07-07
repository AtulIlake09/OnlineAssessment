<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
    //
    public function createStepOne(Request $request, $cat_id)
    {
        if (Auth::user()) {
            if ($cat_id != null || $cat_id != 0) {

                $category = $request->session()->get('category');
                return view('question.create_step_one', compact('cat_id', 'category'));
            }

            return redirect()->back()->with('error_msg', "something went wrong!");
        } else {
            return redirect()->back();
        }
    }

    public function postCreateStepOne(Request $request)
    {
        if (Auth::user()) {
            $request->validate([
                'cat_id' => 'required',
                'type' => 'required',
                'question' => 'required',
            ]);

            $cat_id = $request->cat_id;
            $type = $request->type;
            $question = $request->question;

            $query = DB::table('questions')
                ->where('questions', '=', $question)
                ->where('category_id', '=', $cat_id)
                ->where('type', $type)
                ->first();


            if (empty($query)) {

                DB::table('questions')
                    ->insert(['category_id' => $cat_id, 'questions' => $question, 'type' => $type]);
            } else {
                DB::table('questions')
                    ->where('id', $query->id)
                    ->update(['category_id' => $cat_id, 'questions' => $question, 'type' => $type]);
                $request->session()->put('cat_id', $cat_id);
                return redirect()->route('question.create.step.two', ['ques_id' => $query->id]);
            }

            if ($type == 2) {
                $query = DB::table('questions')
                    ->select('id')
                    ->where('questions', $question)
                    ->where('type', 2)
                    ->first();

                $ques_id = $query->id;
                if (isset($ques_id)) {
                    $request->session()->put('cat_id', $cat_id);
                    return redirect()->route('question.create.step.two', ['ques_id' => $ques_id]);
                } else {
                    return Redirect::route('getques', $cat_id)->with('error_msg', "Something went wrong please try again!");
                }
            }

            return Redirect::route('getques', $cat_id);
        } else {
            return redirect()->back();
        }
    }

    public function createStepTwo(Request $request, $ques_id)
    {
        if (Auth::user()) {
            if (session()->has('cat_id')) {
                $category = $request->session()->get('category');
                $cat_id = $request->session()->get('cat_id');
                $query = DB::table('question_options')
                    ->where('ques_id', $ques_id)
                    ->get();

                if (!empty($query->all())) {
                    $options = [];
                    $c = 1;
                    foreach ($query->all() as $val) {
                        $options[$c] = $val->option;
                        $c++;
                    }


                    return view('question.create_step_two', compact('ques_id', 'cat_id', 'options', 'category'));
                }

                return view('question.create_step_two', compact('ques_id', 'cat_id', 'category'));
            } else {
                return redirect()->back();
            }
        } else {
            return redirect()->back();
        }
    }

    public function postCreateStepTwo(Request $request)
    {
        if (Auth::user()) {
            $request->validate([
                'cat_id' => 'required',
                'ques_id' => 'required',
                'option1' => 'required',
                'option2' => 'required'
            ]);

            $cat_id = $request->cat_id;
            $ques_id = $request->ques_id;
            $option1 = $request->option1;
            $option2 = $request->option2;
            $option3 = $request->option3;
            $option4 = $request->option4;

            $data = [
                ['ques_id' => $ques_id, 'option' => $option1],
                ['ques_id' => $ques_id, 'option' => $option2],
                ['ques_id' => $ques_id, 'option' => $option3],
                ['ques_id' => $ques_id, 'option' => $option4],
            ];

            $query = DB::table('question_options')
                ->where('ques_id', $ques_id)
                ->first();

            if (empty($query)) {
                DB::table('question_options')
                    ->insert($data);
            } else {

                DB::table('question_options')
                    ->where('ques_id', $ques_id)
                    ->delete();

                DB::table('question_options')
                    ->insert($data);
            }

            return redirect()->route('question.create.step.three', ['ques_id' => $ques_id]);
        } else {
            return redirect()->back();
        }
    }

    public function createStepThree(Request $request, $ques_id)
    {
        if (Auth::user()) {
            $category = $request->session()->get('category');
            $cat_id = $request->session()->get('cat_id');

            $query = DB::table('questions as qs')
                ->join('question_options as op', 'qs.id', '=', 'op.ques_id')
                ->where('op.ques_id', $ques_id)
                ->get();

            if (!empty($query->all())) {
                $c = 1;
                foreach ($query->all() as $val) {
                    $question = $val->questions;
                    $options[$c] = ['option_id' => $val->option_id, 'option' => $val->option];
                    $c++;
                }
            } else {
                return Redirect::route('getques', $cat_id)->with('error_msg', "Something went wrong please try again!");
            }


            return view('question.create_step_three', compact('ques_id', 'cat_id', 'question', 'options', 'category'));
        } else {
            return redirect()->back();
        }
    }

    public function postCreateStepThree(Request $request)
    {
        if (Auth::user()) {
            $request->validate([
                'cat_id' => 'required',
                'ques_id' => 'required',
                'answer' => 'required'
            ]);

            $cat_id = $request->cat_id;
            $ques_id = $request->ques_id;
            $option_id = $request->answer;

            $query = DB::table('question_solution')
                ->where('ques_id', $ques_id)
                ->first();

            if (empty($query)) {
                DB::table('question_solution')
                    ->insert(['ques_id' => $ques_id, 'option_id' => $option_id]);
            } else {
                DB::table('question_solution')
                    ->where('ques_id', $ques_id)
                    ->update(['option_id' => $option_id]);
            }

            $request->session()->put('success_msg', "Question Saved Successfully!");
            return Redirect::route('getques', $cat_id);
        }
    }
}
