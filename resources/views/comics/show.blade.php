@extends('layout.main')
@section('main-content')
  <div class="blue-layout">
    <div class="container position-relative">
      <img class="thumb" src="{{$comic['thumb']}}" alt="">
    </div>
  </div>
  <section class="main-info-comic">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <h3 class="title">{{$comic['title']}}</h3>
          <p>{{$comic['description']}}</p>
        </div>
        <div class="col-4">
          <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>
  <section class="footer-info-comic"></section>
@endsection