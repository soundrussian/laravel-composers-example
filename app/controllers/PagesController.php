<?php

class PagesController extends BaseController {

	public function index()
	{
		return View::make('home', array(
            'latest_news' => $this->latest_news
        ));
	}

	public function about()
	{
		return View::make('about', array(
            'latest_news' => $this->latest_news
        ));
	}

}
