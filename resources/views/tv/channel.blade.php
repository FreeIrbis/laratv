@extends('layouts.default')

@section("title", "{$name} - Прямая трансляция - Laravel TV")

@section('content')
    <h1>{{$name}}</h1>
    <blockquote>
        <p>{{$description}}</p>
    </blockquote>

    Категория: {{$category}}
<br>

<iframe src="{{action('ChannelsController@show', ['id' => $id])}}" width="600" height="400" scrolling="no" frameborder="0" ></iframe>

<div id="tv_program"></div>
    <script>
        $(function()
        {
            $.ajax({
                type: "POST",
                url: "/laratvtv/resources/handler/tv_programm.php",
                data: { tv: 'https://tv.yandex.ua/{{$tv}}?date=2017-05-11&period=all-day' }
            }).done(function( data ) {
                $("#tv_program").html(data);
            });
        });

    </script>

@endsection