<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('dashboard.profile.index', [
            'title'=> 'Register',
            'active'=> 'register'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.profile.create', [
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
            'password' => 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        // $request->session()->flash('success', 'Registration successfull!, Please login');

        return redirect('/dashboard/profile')->with('success', 'Registration successfull!, Please login');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(User $profile)
    {
        return view('dashboard.profile.create', [
            'profile' => $profile
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {
        return view('dashboard.profile.edit', [
            'profile' => $profile,
            'user' =>User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profile)
    {

        $rules = [
            'name'=> ['required', 'max:255'],
            'number' => 'required',
            'city' => 'required',
            'province'=> 'required'
        ];

        if($request->username != $profile->username) {
            $rules['username'] = 'required|min:3|max:255|unique:users';
        }
        if($request->email != $profile->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }
        $validatedData = $request->validate($rules);

        if($request->password) {
            $validatedData['password'] == $profile->oldPassword;
            $rules['password'] = 'required|min:5|max:255';
        }


        User::where('id', $profile->id)->update($validatedData);

        return redirect('/dashboard/profile')->with('success', 'Data pegawai berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
