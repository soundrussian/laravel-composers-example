<div class="row">
  <div class="col-md-12 center">
    <h3>Последние новости</h3>
  </div>
</div>
<div class="row">
  @foreach($latest_news as $news)
    <div class="col-md-3">
      <h4>{{ link_to_route('news.show', $news->title, [$news->id]) }}</h4>
    </div>
  @endforeach
</div>