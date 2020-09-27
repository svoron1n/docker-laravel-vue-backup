@extends('layouts.app')
@section('title-block')
  Главная страница
@endsection
@section('content')
  <h1>Главная страница</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam, aut autem consectetur culpa cupiditate distinctio dolorum earum eligendi et eum impedit ipsam iusto magni maxime minus modi nemo neque officia pariatur perspiciatis placeat quia quidem quos ratione recusandae sapiente sequi sint veritatis voluptate! Alias at atque id illum nihil?</p>
@endsection

@section('aside')
  @parent
  <p>Доп. текст</p>
@endsection
