<?php

namespace App\Http\Controllers;

use App\User;
use Hash;
use Illuminate\Support\facades\Auth;
use Illuminate\Support\facades\Redirect;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        return view('auth.passwords.passwordchange');
    }
    public function adminindex()
    {
        return view('admin.setting.password.passwordchange');
    }



    public function password_update(Request $request)
    {
        $password = Auth::user()->password;
        $oldpass = $request->old;

        if (Hash::check($oldpass,$password)) {

            $user=User::find(Auth::id());
            $user->password=Hash::make($request->password);
            $user->save();
            Auth::logout();
            return Redirect()->route('login')->with('success','Password Changed Successfully, log in again');
        }
        else{
            return Redirect()->back()->with('errors','Old password does not matched');
        }
    }
}
