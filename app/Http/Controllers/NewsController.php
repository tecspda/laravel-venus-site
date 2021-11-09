<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\News;
use DB;

class NewsController extends Controller
{
    /**
     * Show all news.
     *
     * @return view
     */
    public function index1()
    {
        $obj_news = DB::table('news')->orderBy('date', 'desc')->paginate(3);

        // ->get();
        return view('news', ['obj_news' => $obj_news, ]);
    }
}
