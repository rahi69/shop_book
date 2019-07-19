<?php

namespace App\Http\Controllers;
use App\Book;

use App\Category;
use App\User;
use App\Comment;
use App\Favorite;
use App\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $nodes = Category::where('parent_id',2)->get();

        $books = Book::all();

        $ratings = Comment::select('book_id', DB::raw('AVG(rate) as average'))
            ->groupBy('book_id')
            ->orderBy('average', 'desc')->limit(20)->get();

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

////        return response()->json($child_books);

        $upload='http://localhost';
        return view('layouts.app',compact('nodes','books','ratings','child_books','novel_books','psychology_books','poetry_books','scientific_books','history_books','mystery_books','upload'));
    }

    public function detail($id)
    {
        $book = Book::findOrFail($id);
       $upload='http://localhost';
        $nodes = Category::where('parent_id',2)->get();
        $cat=$book->category_id;
        $other_books=Book::where('category_id',$cat)
            ->limit(15)->get();
        $reviews=Comment::where('book_id',$id)
            ->limit(15)->get();


        return view('layouts.detail',compact('nodes','book','upload','other_books','reviews'));
    }
    public function  review(Request $request,$id){
        $input=$request->all();
        $input['book_id']=$id;
        $input['user_id']=Auth::id();
        Comment::create($input);


    }
}
