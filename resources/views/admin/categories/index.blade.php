<div><a href="categories/create">Добавить категорию</a></div><br><br>

@foreach($categories as $category)
    <div>
        {{$category->name}}
        <a href="{{action('CategoriesController@edit',['category'=>$category->id])}}">[edit]</a>

        <form method="POST" action="{{action('CategoriesController@destroy',['category'=>$category->id])}}">
            <input type="hidden" name="_method" value="delete"/>
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="submit" value="Удалить"/>
        </form>

        <br>
    </div>
@endforeach