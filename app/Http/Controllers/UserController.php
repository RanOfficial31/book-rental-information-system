<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
// PROFILE FOR USER VIEW 
    public function profile()
    {
        $user = Auth::user();
        return view('profile', ['user' => $user] );
    }

    public function logs()
    {
        $rent_logs = RentLogs::with(['user', 'book'])->where('user_id', Auth::user()->id)->get();
        return view('profile-logs', ['rent_logs' => $rent_logs]);
    }

// USER DASHBOARD VIEW
    public function index()
    {
        $users = user::where('role_id', 2)->where('status', 'active')->get();
        return view('user', ['users' => $users]);
    }

    public function registeredUser()
    {
        $registeredUsers = User::where('status', 'inactive')->where('role_id', 2)->get();
        return view('registered-user', ['registeredUsers' => $registeredUsers]);
    }

    public function show($slug)
    {
        $user = User::where('slug', $slug)->first();
        $rent_logs = RentLogs::with(['user', 'book'])->where('user_id', $user->id)->get();
        return view('user-detail', ['user' => $user, 'rent_logs' => $rent_logs]);
    }

    public function approve($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();
        return redirect('user')->with('status', 'User Approved Successfully');
    }

    public function delete($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('user-delete', ['user' => $user]);
    }

    public function destroy($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->delete();
        return redirect('user')->with('status', 'User Successfully Banned');
    }

    public function blockUser()
    {
        $blockUser = User::onlyTrashed()->get();
        return view('user-block-view', ['blockUser' => $blockUser]);
    }

    public function restore($slug)
    {
        $user = User::withTrashed()->where('slug', $slug)->first();
        $user->restore();
        return redirect('user')->with('status', 'User Has Been Reactivated');
    }
}
