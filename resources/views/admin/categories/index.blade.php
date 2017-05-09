@extends('admin.default')

@section("title", "Категории - Панель администратора")

@section('content')
    <blockquote>
        <p>Категории</p>
    </blockquote>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <a href="{{action('CategoriesController@edit',['category'=>$category->id])}}" class="btn btn-info">Изменить</a>
                    <form method="POST" action="{{action('CategoriesController@destroy',['category'=>$category->id])}}" style="display: inline-block;margin:0;">
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="submit" value="Удалить" class="btn btn-danger"/>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('sidebar')
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Категории</li>
                <li class="active"><a href="{{url('adminzone/categories')}}">Категории</a></li>
                <li><a href="{{url('adminzone/categories/create')}}">Добавить новую</a></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
@endsection