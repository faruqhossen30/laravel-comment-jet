<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function profile(){

        $profile = Auth::user();
        return view('admin.profile.profile' ,compact('profile'));
    }

    public function UpdateProfile(Request $request) {

        // return $request->all();

        $request->validate([
            'name'      => 'required',

            // 'thumbnail' => 'required',
        ], [
            'name.required'      => 'please enter your name',
            // 'thumbnail.required' => 'please enter your thumbnail ',
        ]);
        $adminid = Auth::user()->id;

        User::findOrFail($adminid)->update([
            'name'   => $request->name,
        //   'thumbnail' => $request->thumbnail,
        ]);
        return redirect()->back()->with('success', 'successfully data added');
    }

    public function resetpasswordProfile()  {

        $profile = Auth::user();
        return view('admin.profile.reset-password',compact('profile'));
    }

    public function changepasswordProfile(Request $request) {

        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:3', 'confirmed'],
        ]);

        Auth::user()->update([
            'password' => Hash::make($validated['password']),
        ]);

         Auth::logout();
         return redirect()->route('login');
    }
}
