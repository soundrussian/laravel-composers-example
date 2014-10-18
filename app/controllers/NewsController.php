<?php

class NewsController extends BaseController
{
    public function index()
    {
        $news = News::all();
        $latest_news = News::latest()->get();
        return View::make('news.index', compact('news', 'latest_news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        $latest_news = News::latest()->get();
        return View::make('news.show', compact('news', 'latest_news'));
    }
}