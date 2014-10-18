@extends('layout')

@section('content')
  <div class="page-header">
    <h1>{{ $news->title }}</h1>
  </div>
  <div>
    {{ $news->text }}
  </div>
@endsection