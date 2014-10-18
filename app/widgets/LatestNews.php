<?php namespace Widgets;

class LatestNews
{
    public function compose($view)
    {
        $view->with('latest_news', \News::latest()->get());
    }
}