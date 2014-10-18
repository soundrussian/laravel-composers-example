<?php

class NewsController extends BaseController
{
    public function index()
    {
        $news = News::all();
        return View::make('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return View::make('news.show', compact('news'));
    }
}