<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function getsubmit()
    {
    	return view('addnews');
    }

    public function postnews(Request $request)
    {
    	$news = new News;
    	$news->user_id = $request->user()->id;
    	$news->title = $request->title;
    	$news->url = $request->url;
    	$news->text = $request->text;

    	if($request->save())
    	{
    		return redirect()->route('/')->with('success', 'Успешно добавлено!');
    	}

    	return back()->with('error', 'Ошибка!');
    }
}
