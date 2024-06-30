<?php

namespace App\Http\Controllers\Front;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        return view('front.home.index', [
            'latest_post' => Article::latest()->first(),
            'articles' => Article::with('Category')->whereStatus(1)->latest()->paginate(2),
            'categories' => Category::latest()->get(),

        ]);
    }
    public function home()
    {

        return view('front.portfolio.index',);
    }
    public function detail()
    {

        return view('front.partials.detail',);
    }
    public function detail2()
    {

        return view('front.partials.detail2',);
    }
    public function detail3()
    {

        return view('front.partials.detail3',);
    }
    public function detail4()
    {

        return view('front.partials.detail4',);
    }

    public function detail5()
    {

        return view('front.partials.detail5',);
    }
    
    
}
