<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function index()
    {
        // $posts = test::all();
        // $posts = DB::table('tests')->orderBy('name', 'desc')->get();
        // $posts = Test::orderBy('name', 'desc')->get();
        // $posts = Test::where('id', 3)->get();
        // return view(('pages.home'), compact('posts'));
    }
    public function about()
    {
        return view('pages.about');
    }
}
