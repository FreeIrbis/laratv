@extends('layouts.default')

@section("title", "{$name} - Прямая трансляция - Laravel TV")

@section('content')
    <h1>{{$name}}</h1>
    <blockquote>
        <p>{{$description}}</p>
    </blockquote>

    Тематика: <a href="{{url('tv/cat/'.$categoryId)}}">{{$category}}</a>
<br>

<iframe id="stream" src="/laratvtv/resources/handler/stream.php?stream={{$stream}}" width="600" height="400" scrolling="no" frameborder="0" ></iframe>

<div id="tv_program"></div>
    <script>
        $(function()
        {
            var now = new Date(),
                year = now.getFullYear(),
                month = now.getMonth()+1,
                day = now.getDate();

            $.ajax({
                type: "POST",
                url: "/laratvtv/resources/handler/tv_programm.php",
                data: { tv: 'https://tv.yandex.ua/{{$tv}}?date='+year+'-'+month+'-'+day+'&period=all-day' }
            }).done(function( data ) {
                $("#tv_program").html(data);
            });
        });
    </script>

@endsection