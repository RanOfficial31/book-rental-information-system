<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\User;
use App\Models\RentLogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BorrowingController extends Controller
{
    public function borrowing()
    { 
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $books = Book::all();
        return view('borrowing-form', ['users' => $users, 'books' => $books]);
    }

    public function store(Request $request)
    {
        $request['rent_date'] = Carbon::now()->toDateString();
        $request['return_date'] = Carbon::now()->addDay(5)->toDateString();
        
        $book = Book::findOrFail($request->book_id)->only('status');
        if($book['status'] != 'in stock') {
            Session::flash('status', 'failed');
            Session::flash('title', 'SORRY');
            Session::flash('icon', 'error');
            Session::flash('massage', 'Buku Sedang Dipinjamkan');
            return redirect ('borrowing-form');
        }
        else {
            $count = RentLogs::where('user_id', $request->user_id)->where('actual_return_date', null)
            ->count();

            if($count >= 3) {
                Session::flash('status', 'failed');
                Session::flash('title', 'upps');
                Session::flash('icon', 'warning');
                Session::flash('massage', '!!!Pengguna Melebihi Batas Pinjaman!!!');
            return redirect ('borrowing-form');
            }
            else {
                try {
                    DB::beginTransaction();
                    RentLogs::create($request->all());
                    $book = Book::findOrFail($request->book_id);
                    $book->status = 'not available';
                    $book->save();
                    DB::commit();
                    
                    Session::flash('status', 'failed');
                    Session::flash('title', 'success ');
                    Session::flash('icon', 'success');
                    Session::flash('massage', 'Buku Berhasil Dipinjamkan');
                    return redirect ('borrowing-form');
                } catch (\Throwable $th) {
                    DB::rollBack();
                    
                }
            }
            
        }
        
    }
}