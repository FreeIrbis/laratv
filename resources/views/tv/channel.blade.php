@extends('layouts.default')

@section("title", "{$name} - Прямая трансляция - Laravel TV")

@section('content')
    Залупа например с канала говно {{$name}}<br>
    Ссылка на плеер, переданная из контроллера: {{$stream}}<br>
    Ссылка на программу, переданная из контроллера: {{$tv}}<br>
    Категория: {{$category}}
@endsection