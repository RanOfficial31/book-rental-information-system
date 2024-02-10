<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PublicController extends Controller
{
    public function link()
    {
        return view('linktree');
    }

    public function home()
    {
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        return view('public-home',[
            'book_count' => $bookCount,
            'category_count' => $categoryCount,
            'user_count' => $userCount
        ]);
    }

    public function index(Request $request)
    {
        $categories = Category::all();
        
        if ($request->category || $request->title) {
            $books = Book::where('title', 'like', '%'.$request->title.'%')->get();

            // $books = Book::whereHas('categories', function($q) use($request) {
            //     $q->where('categories.id', $request->category);
            // })->get();
        }
        else {
            $books = Book::all();
        }
        
        return view('public-book', ['books' => $books, 'categories'=>$categories]);
    }

    public function about()
    {
        return view('public-about');
    }

    public function contact()
    {
        return view('public-contact');
    }
}
