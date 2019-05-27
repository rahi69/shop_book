<?php

namespace App\Http\Controllers;
use App\Book;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $child_books=Book::where('category_id',3)
            ->limit(20)->get();

        $poetry_books=Book::where('category_id',4)
            ->limit(20)->get();

        $history_books=Book::where('category_id',5)
            ->limit(20)->get();

        $novel_books=Book::where('category_id',6)
            ->limit(20)->get();

        $mystery_books=Book::where('category_id',7)
            ->limit(20)->get();

        $scientific_books=Book::where('category_id',8)
            ->limit(20)->get();

        $psychology_books=Book::where('category_id',9)
            ->paginate(6);


        $upload='http://localhost';

//        return response()->json($child_books);

        return view('layouts.app',compact('child_books','novel_books','psychology_books','poetry_books','scientific_books','history_books','mystery_books','upload'));
//        return view('layouts.app',compact('child_books','novel_books','upload'));
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $upload='http://localhost';

        return view('layouts.detail',compact('book','upload'));
//        return view('t',compact('book','upload'));
    }
}
