<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\ChangeUsernameRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('mains.user.user');
    }

    public function index_teacher()
    {

        return view('mains.teacher.profile-mgmt');
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
    public function show(string $id, Request $request)
    {
        if(! $request->ajax()) {

            abort(403, "Not Found");
        }

        $user = User::find($id);

        $check = $request->query('check');
        if ($check == true) {

            return back();
        }

        return view('partials.user-information', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)

    {
        //
        if(! $request->ajax()) {

            abort(403, "Error");
        }

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

        $fullname = $request->input('fullname');
        $phone_number = $request->input('phone-number');
        $email = $request->input('email');
        $contact = $request->input('contact');
        $desc_user = $request->input('desc-user');
        $achievenment = $request->input('achievenment');

        if(empty($fullname)) {
            $fullname = "Người dùng mới";
        }




        if ($request->hasFile('user-img')) {

            // Lấy file
            $file = $request->file('user-img');

            // $path = $file->storeAs('images/users', $file->getClientOriginalName(), 'public');
            $file->move(public_path('images/users/' . $user_id . "_" . $user_name), $file->getClientOriginalName());

            $user->user_img = 'images/users/' . $user_id . "_" . $user_name . "/" . $file->getClientOriginalName();
        }

        if ($user) {

            $user->fullname = $fullname;
            $user->phone_number = $phone_number;
            $user->email = $email;
            $user->contact = $contact;
            $user->desc_user = $desc_user;
            $user->achievenment = $achievenment;

            // $user->password = $new_password;

            $user->save();
        }

        if (Auth::user()->role == 'teacher') {
            return redirect('/profile');
        } else {
            return redirect('/user');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //

        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        $user->delete();

        return redirect('/login')->with('delete-username-message', 'Bạn đã xóa tài khoản thành công');
    }

    public function changeUsername(ChangeUsernameRequest $request)
    {

        $username = $request->input('username');

        $user_id = Auth::user()->id;

        $user = User::find($user_id);

        $user->username = $username;

        $user->save();

        return back()->with('change-username-message', 'Tên tài khoản đã thay đổi thành công');

        // return redirect('/user')->with('change-username-message', 'Tên tài khoản đã thay đổi thành công');
    }

    public function changePassword(ChangePasswordRequest $request)
    {

        $password = Auth::user()->password;

        $old_password = $request->input('old_password');

        if (Hash::check($old_password, $password)) {

            $new_password = $request->input('password');

            $user_id = Auth::user()->id;
            $user = User::find($user_id);

            $user->password = $new_password;

            $user->save();

            return back()->with('change-password-message-success', 'Đổi mật khẩu thành công');
        } else {
            return back()->with('change-password-message-error', 'Mật khẩu không trùng khớp');
        }
    }
}
