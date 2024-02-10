<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class RentLogController extends Controller
{

    public function return()
    {
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('return-book', ['users' => $users, 'books' => $books]);
    }

    public function returnBook(Request $request)
    { 
        $rent = RentLogs::where('user_id', $request->user_id)->where('book_id', $request->book_id)->where
            ('actual_return_date', null);
        $rentData = $rent->first();
        $countData = $rent->count();
            if($countData == 1){
                $rentData->actual_return_date = Carbon::now()->toDateString();
                $rentData->save();
                Session::flash('status', 'failed');
                Session::flash('title', 'Success');
                Session::flash('icon', 'success');
                Session::flash('massage', 'Buku Berhasil Dikembalikan');
                return redirect ('return-book');
            }
            else {
                Session::flash('status', 'failed');
                Session::flash('title', 'error');
                Session::flash('icon', 'error');
                Session::flash('massage', 'Silahkan Lihat Daftar Pinjaman!');
                return redirect ('return-book');
            }
    }

    public function index()
    {
        
        $rent_logs = RentLogs::all();
        return view('rentlog', ['rent_logs' => $rent_logs]);
    }

    
}
