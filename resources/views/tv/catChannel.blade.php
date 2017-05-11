@extends('layouts.default')

@section("title", "Тематика - Прямая трансляция - Laravel TV")

@section('content')
    <h1>Телеканалы на тематику {{$category->name}}</h1>
    @foreach($channels as $channel)
        <a href="{{url('tv/'.$channel->uri)}}">{{$channel->name_channel}}</a><br>
    @endforeach
@endsection

@section('sidebar')

@endsection