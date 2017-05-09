<form method="POST" action="{{action('ChannelsController@store')}}"/>
Название канала:
<input type="text" name="name_channel" /><br>
Uri канала:
<input type="text" name="uri" /><br>
Описание канала:
<input type="text" name="description_channel" /><br>
Ссылка на стрим:
<input type="text" name="stream" /><br>
Ссылка на программу:
<input type="text" name="tv_channel" /><br>
Категория:
<select name="category">
    @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
</select><br>

<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<input type="submit" value="Сохранить">
@if(Session::has('message'))
{{Session::get('message')}}
@endif
</form>