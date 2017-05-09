<form method="POST" action="{{action('CategoriesController@store')}}"/>
Название категории:
<input type="text" name="name" /><br>

<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<input type="submit" value="Сохранить">
@if(Session::has('message'))
{{Session::get('message')}}
@endif
</form>