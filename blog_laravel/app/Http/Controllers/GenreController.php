<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\genre;
class GenreController extends Controller
{

    public function create()
    {
        return view('genre.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|max:255'
        ]);

       genre::insert([
            'nama' => $request['nama']
        ]);

        return redirect('genre');
    }
    public function index()
    {
        $genre = genre::all();
        return view('genre.index', compact('genre'));
    }
    public function show($id)
    {
        //ambil yg pertama, pakai array kalau tidak;get untuk banyak foreach atau nembak array
        $genre = genre::find($id);

        return view('genre.show', compact('genre'));
    }
    public function edit($id)
    {
        //ambil yg pertama, pakai array kalau tidak;get untuk banyak foreach atau nembak array
        $genre = genre::find($id);

        return view('genre.edit', compact('genre'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|max:255'
        ]);

        $genre = genre::find($id);
        $genre->nama = $request->nama;
        $genre->update();

        return redirect('genre');
    }
    public function destroy($id)
    {
        $genre = genre::find($id);
        $genre->delete();
        return redirect('/genre');
    }
}
