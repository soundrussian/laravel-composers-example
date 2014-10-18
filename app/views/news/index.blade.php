@extends('layout')

@section('content')
  <div class="page-header">
    <h1>Новости</h1>
  </div>
  <ol>
    @foreach($news as $article)
      <li>{{ link_to_route('news.show', $article->title, [$article->id]) }}</li>
    @endforeach
  </ol>
@endsection