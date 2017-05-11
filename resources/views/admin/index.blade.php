@extends('admin.default')

@section("title", "Панель администратора")

@section('content')

   <a href="{{url('adminzone/logout')}}">Выйти</a>

    Каналы
    <ul>
        <li><a href="adminzone/channels">Все</a></li>
        <li><a href="adminzone/channels/create">Добавить</a></li>
    </ul>
    Категории
    <ul>
        <li><a href="adminzone/categories">Все</a></li>
        <li><a href="adminzone/categories/create">Добавить</a></li>
    </ul>
@endsection