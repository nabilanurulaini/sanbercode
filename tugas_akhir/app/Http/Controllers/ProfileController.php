<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Profile;
use App\Question;
use App\User;


class ProfileController extends Controller
{

        public function index()
        {
            $profile = Profile::all();
            return view('profile.index', compact('profile'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'biodata' => 'required',
                'umur' => 'required',
                'alamat' => 'required',
                'users_id' => 'required',
            ]);

            $profile = new Profile;

            $profile->biodata = $request->biodata;
            $profile->umur = $request->umur;
            $profile->alamat = $request->alamat;
            $profile->users_id = $request->users_id;

            $profile->save();

            return redirect('/profile');
        }

        public function edit($id)
        {
            $user = User::get();
            $profile = Question::find($id);
            return view('profile.edit', compact('profile', 'user'));
        }

        public function update($id, Request $request){


            $request->validate([
                'biodata' => 'required',
                'umur' => 'required',
                'alamat' => 'required',

            ]);


            $profile = Profile::find($id);
            $profile->bio = $request->bio;

            $profile->update($profile);
            return redirect('/profile');
        }

        public function destroy($id){
            Profile::destroy($id);
            return redirect('/profile')->with('success', 'Answer Berhasil Dihapus!');
        }
}
