<?php

class LatestNews
{
    public function compose($view)
    {
        $view->with('latest_news', News::latest()->get());
    }
}

View::composer('_latest_news', 'LatestNews');