<?php

namespace App\Http\Controllers;

use App\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        $keyword = $request->input('keyword');
        History::create([
            'keyword' => $keyword
        ]);

        return view('vendor',compact('keyword'));
    }

    public function result()
    {

    }
}
