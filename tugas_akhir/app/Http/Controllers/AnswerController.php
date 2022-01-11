<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Answer;
use App\Question;

class AnswerController extends Controller
{
    public function create(){
        $question = Question::get();
        return view('answer.create',compact('question'));
    }

    public function store(Request $request){
        //    dd($request->all()); 
           $request->validate([
               'answer' => 'required',
               'questions_id' => 'required',
           ]);
           $answer= new Answer;

           $answer->answer = $request->answer;
           $answer->questions_id = $request->questions_id;

           $answer->save();

           return redirect('/answer')->with('success', 'Question Berhasil Disimpan!');
        }

        public function index() {
            // $question = DB::table('questions')->get();
            // dd($cast);
            $answer = Answer::all();
            return view('answer.index', compact('answer'));
        }

        public function show($id){
            // $cast = DB::table('cast')->where('id', $id)->first();
            // dd($cast);
            $answer = Answer::find($id);
            return view('answer.show', compact('answer'));
        }

        public function edit($id) {
            // $cast = DB::table('cast')->where('id', $id)->first();
            $answer = Question::find($id);
            return view('answer.edit', compact('answer'));
        }

        public function update($id, Request $request){

            
            $request->validate([
                'answer' => 'required',
                'questions_id' => 'required',
                
            ]);
       
        
            $update = Answer::where('id', $id)->update([
                "answer" => $request["answer"],
                "questions_id" => $request["questions_id"],
            ]);
            return redirect('/answer')->with('success', 'Berhasil Update Answer!');
        }

        public function destroy($id){
            // $query = DB::table('cast')->where('id', $id)->delete();
            Answer::destroy($id);
            return redirect('/answer')->with('success', 'Answer Berhasil Dihapus!');
        }
}
