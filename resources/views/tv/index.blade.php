@extends('layouts.default')

@section("title", "Прямая трансляция - Laravel TV")

@section('content')
    Это главная хуйня ТВ<br>

    @foreach($channels as $channel)
        <a href="{{url('tv/'.$channel->uri)}}">{{$channel->name_channel}}</a><br>
    @endforeach

@endsection