<?php

namespace App\Http\Controllers;

use App\Http\Resources\NewResource;
use App\Http\Resources\NewsResource;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news = NewsResource::collection((new News())->paginate());

        return view('news', compact('news'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $news
     * @return \Illuminate\Http\Response
     */
    public function show($news)
    {

        $new = (new NewResource((new News())->where('id', $news)->first()));
        return view('new', compact('new'));

    }


}
