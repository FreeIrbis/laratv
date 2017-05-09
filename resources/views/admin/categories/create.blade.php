@extends('admin.default')

@section("title", "Создать новую категорию - Панель администратора")

@section('content')
    <blockquote>
        <p>Добавить новую категорию</p>
    </blockquote>

    <form method="POST" action="{{action('CategoriesController@store')}}"/>

    <div class="control-group info">
        <label class="control-label" for="inputName">Название категории</label>
        <div class="controls">
            <input type="text" id="inputName" name="name">
        </div>
    </div>

    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="submit" value="Добавить" class="btn btn-primary">
    @if(Session::has('message'))
    {{Session::get('message')}}
    @endif
    </form>
@endsection

@section('sidebar')
    <div class="span3">
        <div class="well sidebar-nav">
            <ul class="nav nav-list">
                <li class="nav-header">Категории</li>
                <li><a href="{{url('adminzone/categories')}}">Категории</a></li>
                <li class="active"><a href="{{url('adminzone/categories/create')}}">Добавить новую</a></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
@endsection