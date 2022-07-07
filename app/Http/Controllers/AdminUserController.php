<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.users.index', [
            'users' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create', [
            'user' => User::where('id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=> ['required', 'max:255'],
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'number' => 'required',
            'city' => 'required',
            'province'=> 'required',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull!, Please login');

        return redirect('/dashboard/users')->with('success', 'Registration successfull!, Please login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user,
            'user' =>User::all()
        ]);
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
        $rules = [
            'name'=> ['required', 'max:255'],
            'number' => 'required',
            'city' => 'required',
            'province'=> 'required'
        ];

        if($request->username != $user->username) {
            $rules['username'] = 'required|min:3|max:255|unique:users';
        }
        if($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }
        $validatedData = $request->validate($rules);

        if($request->password) {
            $validatedData['password'] == $user->oldPassword;
            $rules['password'] = 'required|min:5|max:255';
        }


        User::where('id', $user[0]->id)->update($validatedData);

        return redirect('/dashboard/users')->with('success', 'Data pegawai berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);

        return redirect('/dashboard/users')->with('success', 'Pegawai berhasil dihapus');
    }
}
