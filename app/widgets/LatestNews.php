<?php

View::composer('_latest_news', function($view) {
  $view->with('latest_news', News::latest()->get());
});