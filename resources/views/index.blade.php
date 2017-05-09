@extends('layouts.default')

@section("title", "Laravel TV")

@section('content')
    Самая главная страница<br>
    <a href="{{url('tv')}}">Смотреть ТВ</a><br>
@endsection