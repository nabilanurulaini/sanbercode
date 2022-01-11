<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\film;
use App\genre;
use File;
class FilmController extends Controller
{
    //
    public function create()
    {
        $genre = genre::get();
        return view('film.create',compact('genre'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|image|mimes:jpeg, jpg, gif, png, svg|max : 2048',
            'genre_id' => 'required'
        ]);
        $posterName = time().'.'.$request->poster->extension();//rake the time from image when it's uploaded
        $request->poster->move(public_path('images'),$posterName);//export the file to public folder > images
        $film = new film;

        $film->judul    =$request->judul;
        $film->ringkasan=$request->ringkasan;
        $film->tahun    =$request->tahun;
        $film->poster   =$posterName;
        $film->genre_id =$request->genre_id;

        $film->save();
        return redirect('/film');
    }
    public function index()
    {

        $film = film::all();//get all data from database using eloquent method
        return view('film.index', compact('film'));
    }
    public function show($id)
    {
        //ambil yg pertama, pakai array kalau tidak;get untuk banyak foreach atau nembak array
        $film = film::find($id);

        return view('film.show', compact('film'));
    }
    public function edit($id)
    {
        //ambil yg pertama, pakai array kalau tidak;get untuk banyak foreach atau nembak array
        //$film = DB::table('film')->where('id', $id)->first();
        $genre = genre::get();
        $film = film::find($id);
        return view('film.edit', compact('film', 'genre'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'judul' => 'required',
            'ringkasan' => 'required',
            'tahun' => 'required',
            'poster' => 'required|image|mimes:jpeg, jpg, gif, png, svg|max : 2048',
            'genre_id' => 'required'
        ]);

        $posterName = time().'.'.$request->poster->extension();//rake the time from image when it's uploaded
        $request->poster->move(public_path('images'),$posterName);//export the file to public folder > images
        $film = film::findorfail($id);
        if ($request->has('poster')) {
            $path = "/images";
            File::delete($path . $film->poster);
            $image = $request->poster;
            $replacedImage = time() . ' - '. $image->getClientOriginalName();
            $image->move('images/',$replacedImage);
            $dataFilm = [
                'judul' =>$request->judul,
                'ringkasan' =>$request->ringkasan,
                'tahun' =>$request->tahun,
                'poster' =>$request->poster,
                'genre_id' =>$request->genre_id
            ];
        } else {
            $dataFilm = [
                'judul' =>$request->judul,
                'ringkasan' =>$request->ringkasan,
                'tahun' =>$request->tahun,
                'genre_id' =>$request->genre_id
            ];

        }

        $film->update($dataFilm);

        return redirect('/film');
    }
    public function destroy($id)
    {
        //delete data with method delete() using method find($id) from database
        // $film = film::find($id);
        // $film->delete();
        // return redirect('/film');
        $film = film::findorfail($id);
        $film->delete();
        $path = "/images";
        File::delete($path .$film->poster);
        return redirect('/film');

    }
}
