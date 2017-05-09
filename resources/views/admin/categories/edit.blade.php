<form method="POST" action="{{action('CategoriesController@update',['category'=>$category->id])}}"/>
Название категории:
<input type="text" name="name" value="{{$category->name}}"/><br>

<input type="hidden" name="_method" value="put"/>
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<input type="submit" value="Сохранить">
@if(Session::has('message'))
{{Session::get('message')}}
@endif
</form>