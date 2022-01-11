<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
// this is the model's name
use App\cast;
class CastController extends Controller
{
    public function create()
    {
        return view('cast.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'umur' => 'required',
            'bio' => 'required'
        ]);

       cast::insert([
            'nama' => $request['nama'],
            'umur' => $request['umur'],
            'bio' => $request['bio']
        ]);

        return redirect('/cast');
    }
    public function index()
    {

        $cast = cast::all();//get all data from database using eloquent method
        return view('cast.index', compact('cast'));
    }

    public function show($id)
    {
        //ambil yg pertama, pakai array kalau tidak;get untuk banyak foreach atau nembak array
        $cast = cast::find($id); //id find untuk primary key

        return view('cast.show', compact('cast'));
    }
    public function edit($id)
    {
        //ambil yg pertama, pakai array kalau tidak;get untuk banyak foreach atau nembak array
        //$cast = DB::table('cast')->where('id', $id)->first();
        $cast = cast::find($id);
        return view('cast.edit', compact('cast'));
    }
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required|max:255',
            'umur' => 'required',
            'bio'  => 'required',
        ]);

        $cast = cast::find($id);
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;
        $cast->update();

        return redirect('/cast');
    }
    public function destroy($id)
    {
        //delete data with method delete() using method find($id) from database
        $cast = cast::find($id);
        $cast->delete();
        return redirect('/cast');
    }

}
