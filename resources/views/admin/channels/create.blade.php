@extends('admin.default')

@section("title", "Создать новый канал - Панель администратора")

@section('content')
        <blockquote>
                <p>Добавить новый канал</p>
        </blockquote>

        <form method="POST" action="{{action('ChannelsController@store')}}"/>

        <div class="control-group info">
                <label class="control-label" for="inputName">Название канала</label>
                <div class="controls">
                        <input type="text" id="inputName" name="name_channel">
                </div>
        </div>

        <div class="control-group info">
                <label class="control-label" for="inputUri">URI канала</label>
                <div class="controls">
                        <input type="text" id="inputUri" name="uri">
                </div>
        </div>

        <div class="control-group info">
                <label class="control-label" for="inputDes">Описание канала</label>
                <div class="controls">
                        <textarea id="inputDes" name="description_channel"></textarea>
                </div>
        </div>

        <div class="control-group info">
                <label class="control-label" for="inputStream">Ссылка на стрим</label>
                <div class="controls">
                        <input type="text" id="inputStream" name="stream" />
                </div>
        </div>

        <div class="control-group info">
                <label class="control-label" for="inputTv">Ссылка на программу</label>
                <div class="controls">
                        <input type="text" id="inputTv" name="tv_channel" />
                </div>
        </div>

        <div class="control-group info">
                <label class="control-label" for="inputCat">Категория</label>
                <div class="controls">
                        <select name="category" id="inputCat">
                                @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                        </select>
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
                                <li class="nav-header">Каналы</li>
                                <li><a href="{{url('adminzone/channels')}}">Каналы</a></li>
                                <li class="active"><a href="{{url('adminzone/channels/create')}}">Добавить новый</a></li>
                        </ul>
                </div><!--/.well -->
        </div><!--/span-->
@endsection