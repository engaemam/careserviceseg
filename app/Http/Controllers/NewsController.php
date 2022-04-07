<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news_info')
        ->where('lang','=','en')
        ->orderBy('id', 'desc')
        ->take(1)
        ->get(); 
        $allnews = DB::table('news_info')
        ->where('lang','=','en')
        ->paginate(4);
        $data = [
            'news'  => $news,
            'allnews'  => $allnews,
        ];
        return view('news')->with($data);
    }

    public function news_ar()
    {
        $news = DB::table('news_info')
        ->where('lang','=','ar')
        ->orderBy('id', 'desc')
        ->take(1)
        ->get(); 
        $allnews = DB::table('news_info')
        ->where('lang','=','ar')
        ->paginate(4);
        $data = [
            'news'  => $news,
            'allnews'  => $allnews,
        ];
        return view('view-ar.news-ar')->with($data);
    }
    public function readmore($id)
    {
        Input::get('id');
        $news = DB::table('news_info')->where('id','=',$id)
        ->where('lang','=','en')
        ->orderBy('id', 'desc')
        ->take(1)
        ->get(); 
        $allnews = DB::table('news_info')
        ->where('lang','=','en')
        ->orderBy('id', 'asc')
        ->paginate(3);
        $data = [
            'news'  => $news,
            'allnews'  => $allnews,
        ];
        return view('single_articl')->with($data);
    }
 
    public function readmore_ar($id)
    {
        Input::get('id');
        $news = DB::table('news_info')->where('id','=',$id)
        ->where('lang','=','ar')
        ->orderBy('id', 'desc')
        ->take(1)
        ->get(); 
        $allnews = DB::table('news_info')
        ->where('lang','=','ar')
        ->orderBy('id', 'asc')
        ->paginate(3);
        $data = [
            'news'  => $news,
            'allnews'  => $allnews,
        ];
        return view('view-ar.single_articl-ar')->with($data);
    }
}
