<?php namespace Widgets;

use Illuminate\Support\ServiceProvider;

class WidgetsServiceProvider extends ServiceProvider
{
    public function register()
    {
        \View::composer('widgets.latest_news', '\Widgets\LatestNews');
    }
}