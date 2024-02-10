<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
    return view('login');
    }

    public function register()
    {
    return view('register');
    }

            // LOGIN FITURE
    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
// IF USER NOT VERIFICATION
        if (Auth::attempt($credentials)){
            if (Auth::user()->status !='active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('massage', '!! Sorry, your account inactive !!');
                return redirect ('/login');
            }
// USER AFTER VERIFICATION
            $request->session()->regenerate();
            // for admin
            if(Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }
            // for user
            if(Auth::user()->role_id == 2) {
                return redirect('profile');
            }
        } 
// IF USER ACCOUNT IS NOT REGISTER
            Session::flash('status', 'failed');
            Session::flash('massage', '!! Username or password invalid !!');
            return redirect ('/login');
    }


            // LOGOUT FITUR
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }


    // REGISTRATION FITUR
    public function registerProcess(Request $request)
    {
        $validate = $request->validate([
            'password' => 'required|max:255',
            'username' => 'required|unique:users|max:255',
            'phone' => 'max:255',
            'addres' => 'required',
        ]);
        $request['password'] = Hash::make($request->password);
        $user = User::create($request->all());

        Session::flash('status', 'succes');
        Session::flash('massage', 'Akun berhasil di buat, tunggu ferifikasi admin');
        return redirect ('/register');
    }
}
