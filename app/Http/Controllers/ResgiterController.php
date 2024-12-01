<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
// use Illuminate\Http\Request;

class ResgiterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('mains.user.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
        $username = $request -> input('username');
        $password = $request -> input('password');

        $user = User::create([
            'username' => $username,
            'password' => $password,
            'role' => 'student'
        ]);
    
        if($user) {

           return back()->with('success', 'Tạo tài khoản thành công');
        } else {
            
            return back()->with('error', 'Tạo tài khoản thất bại');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUserRequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
