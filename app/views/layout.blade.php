<!DOCTYPE html>
<html>
<head>
  <title>Пример использования составителей</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::route('home') }}">Мой бложег</a>
      </div>
      <ul class="nav navbar-nav">
        <li>{{ link_to_route('home', 'На главную' ) }}</li>
        <li>{{ link_to_route('news.index', 'Все новости' ) }}</li>
        <li>{{ link_to_route('about', 'О бложеге' ) }}</li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        @yield('content')
      </div>
    </div>
  {{ View::make('widgets.latest_news') }}
  </div>
</body>
</html>

