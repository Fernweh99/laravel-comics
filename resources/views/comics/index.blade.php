@extends('layout.main')
@section('head-title', 'Comics')
@php
  $comics = config('comics')
@endphp
@section('main-content')
  <div class="container my-5">
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6">
      @foreach($comics as $comic)
      <div class="col">
        <a class="text-white" href="{{route('comics.show', ['id' => $loop->index])}}">
          <img class="comic-img" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
          <p>{{$comic['title']}}</p>
        </a>
      </div>
      @endforeach
    </div>
  </div>
@endsection