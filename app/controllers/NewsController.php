<?php

class NewsController extends BaseController
{
    public function index()
    {
        $news = News::all();
        return View::make('news.index', array(
            'news' => $news,
            'latest_news' => $this->latest_news
        ));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return View::make('news.show', array(
            'news' => $news,
            'latest_news' => $this->latest_news
        ));
    }
}