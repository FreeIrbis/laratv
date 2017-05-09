<form method="POST" action="{{action('ChannelsController@update',['channel'=>$channel->id])}}"/>
Название канала:
<input type="text" name="name_channel" value="{{$channel->name_channel}}"/><br>
Uri канала:
<input type="text" name="uri" value="{{$channel->uri}}"/><br>
Описание канала:
<input type="text" name="description_channel" value="{{$channel->description_channel}}"/><br>
Ссылка на стрим:
<input type="text" name="stream" value="{{$channel->stream}}"/><br>
Ссылка на программу:
<input type="text" name="tv_channel" value="{{$channel->tv_channel}}"/><br>
Категория:
<select name="category">
        @foreach($categories as $category)
            @if($channel->category==$category->id)
                <option value="{{$category->id}}" selected>{{$category->name}}</option>
            @else
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endif
        @endforeach
</select><br>

<input type="hidden" name="_method" value="put"/>
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<input type="submit" value="Сохранить">
@if(Session::has('message'))
{{Session::get('message')}}
@endif
</form>