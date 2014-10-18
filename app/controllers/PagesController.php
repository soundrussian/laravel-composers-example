<?php

class PagesController extends BaseController {

	public function index()
	{
        $latest_news = News::latest()->get();
		return View::make('home', compact('latest_news'));
	}

	public function about()
	{
        $latest_news = News::latest()->get();
		return View::make('about', compact('latest_news'));
	}

}
