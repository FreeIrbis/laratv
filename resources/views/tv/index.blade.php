@extends('layouts.default')

@section("title", "Прямая трансляция - Laravel TV")

@section('content')
    <h1>Прямая трансляция телеканалов</h1>

    @foreach($channels as $channel)
        <a href="{{url('tv/'.$channel->uri)}}">{{$channel->name_channel}}</a><br>
    @endforeach

@endsection

@section('sidebar')
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Тематики</li>
                @foreach($categories as $category)
                    <li><a href="{{url('tv/cat/'.$category->id)}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
        </div><!--/.well -->
    </div>
@endsection