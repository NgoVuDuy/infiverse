<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        return view('partials.user-information', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
        return view('partials.edit-form');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->username;
        $user = User::find($user_id);

        $username = $request->input('username');
        $phone_number = $request->input('phone-number');
        $email = $request->input('email');
        $contact = $request->input('contact');
        $desc_user = $request->input('desc-user');
        $achievenment = $request->input('achievenment');

        if ($request->hasFile('user-img')) {

            // Lấy file
            $file = $request->file('user-img');

            // $path = $file->storeAs('images/users', $file->getClientOriginalName(), 'public');
            $file->move(public_path('images/users/' . $user_id . "_" . $user_name), $file->getClientOriginalName());

            $user->user_img = 'images/users/' . $user_id . "_" . $user_name . "/" . $file->getClientOriginalName();


        }

        if($user) {

            $user->fullname = $username;
            $user->phone_number = $phone_number;
            $user->email = $email;
            $user->contact = $contact;
            $user->desc_user = $desc_user;
            $user->achievenment = $achievenment;

            $user->save();
        }

        return redirect('/user');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
