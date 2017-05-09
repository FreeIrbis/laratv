<div><a href="channels/create">Добавить канал</a></div><br><br>


@foreach($channels as $channel)
    <div>
        {{$channel->name_channel}}
        <a href="{{action('ChannelsController@edit',['channel'=>$channel->id])}}">[edit]</a>

        <form method="POST" action="{{action('ChannelsController@destroy',['channel'=>$channel->id])}}">
            <input type="hidden" name="_method" value="delete"/>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="submit" value="Удалить"/>
        </form>

        <br>
    </div>
@endforeach