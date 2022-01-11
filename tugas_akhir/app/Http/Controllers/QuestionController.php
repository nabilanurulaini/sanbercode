<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;
use App\Genre;
use File;

class QuestionController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('auth')->except(['index', 'show']);

        
    }

    public function create(){
        $genre = Genre::get();
        return view('question.create',compact('genre'));

    }

    public function store(Request $request){
        //    dd($request->all()); 
           $request->validate([
               'title' => 'required',
               'content' => 'required',
               'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
               'genres_id' => 'required'
           ]);
       

           $imageName = time().'.'.$request->img->extension();

           $request->img->move(public_path('gambar'), $imageName);

            $question = new Question;

            $question->title = $request->title;
            $question->content = $request->content;
            $question->img = $imageName;
            $question->genres_id = $request->genres_id;

            $question->save();

            return redirect('/question')->with('success', 'Question Berhasil Disimpan!');
        }

        public function index() {
            // $question = DB::table('questions')->get();
            // dd($cast);
            $question = Question::get();
            return view('question.index', compact('question'));
        }

        public function show($id){
            // $cast = DB::table('cast')->where('id', $id)->first();
            // dd($cast);
            $question = Question::find($id);
            return view('question.show', compact('question'));
        }

        public function edit($id) {
            // $cast = DB::table('cast')->where('id', $id)->first();
            $genre = Genre::get();
            $question = Question::find($id);
            return view('question.edit', compact('question','genre'));
        }

        public function update($id, Request $request){
       
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'genres_id' => 'required'
            ]);
        

             $question = Question::findorfail($id);

             if ($request->has('img')) {
                 $path = "gambar/";
                 File::delete($path . $question->img);
                 $imageName = time().'.'.$request->img->extension();
                 $gambar = $request->img;
                 $request->img->move(public_path('gambar'), $imageName);
                 $question_data = [
                     'title' => $request->title,
                     'content' => $request->content,
                     'img' => $imageName,
                     'genres_id' => $request->genres_id
                 ];
             } else {
                 $question_data = [
                     'title' => $request->title,
                     'content' => $request->content,
                     'genres_id' => $request->genres_id
                 ];
             }

             $question->update($question_data);
             return redirect('/question');
        }

        public function destroy($id){
            // $query = DB::table('cast')->where('id', $id)->delete();
            $question = Question::findorfail($id);
            $question->delete();
            
            $path= "gambar/";
            File::delete($path . $question->img);

            return redirect('/question')->with('success', 'gambar Berhasil Dihapus!');
        }
}
