<?php

namespace App\Http\Controllers\Admin;

use App\Problem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->orderBy('created_at', 'desc')->paginate(20);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request['password']),
//                'password' => $request->input('password'),
                'address' => $request->input('address'),
                'social' => $request->input('social'),
                'institution' => $request->input('institution'),
                'about' => $request->input('about'),
            ]);

            if ($user){
                return redirect()->back()
                    ->with('success', 'User created successfully');
            }
        }
        return back()->withInput()->with('errors','Failed to Create new user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $user = User::where('id',$user->id)->first();
        return view('admin.user.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $user = User::find($user->id);
        return view('admin.user.edit', ['user'=>$user]);
    }

    public function makeAdmin($id)
    {
        $table = User::find($id);
        $table->user_type = 'Admin';
        $table->save();
        return redirect()->back()->with('success', 'That guy is now an Admin! :)');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $userUpdate = User::where('id', $user->id)
            ->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'address' => $request->input('address'),
                'social' => $request->input('social'),
                'institution' => $request->input('institution'),
                'about' => $request->input('about'),
                'user_type' => $request->input('user_type'),
            ]);
        if ($userUpdate)
        {
            return redirect()->back()
                ->with('success', 'User updated Successfully');
        }
        return back()->withInput()->with('errors', 'The User could not be updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $table = User::find($id);
        $table->delete();
        return redirect()->back()->with('success', 'He is Gone!');
    }

    public function userToAdmin(Request $request)
    {

    }
}
