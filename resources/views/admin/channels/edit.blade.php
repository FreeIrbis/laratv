@extends('admin.default')

@section("title", "Редактировать канал - Панель администратора")

@section('content')
    <blockquote>
        <p>Редактировать канал {{$channel->name_channel}}</p>
    </blockquote>

    <form method="POST" action="{{action('ChannelsController@update',['channel'=>$channel->id])}}"/>

    <div class="control-group info">
        <label class="control-label" for="inputName">Название канала</label>
        <div class="controls">
            <input type="text" id="inputName" name="name_channel" value="{{$channel->name_channel}}">
        </div>
    </div>

    <div class="control-group info">
        <label class="control-label" for="inputUri">URI канала</label>
        <div class="controls">
            <input type="text" id="inputUri" name="uri" value="{{$channel->uri}}">
        </div>
    </div>

    <div class="control-group info">
        <label class="control-label" for="inputDes">Описание канала</label>
        <div class="controls">
            <textarea id="inputDes" name="description_channel">{{$channel->description_channel}}</textarea>
        </div>
    </div>

    <div class="control-group info">
        <label class="control-label" for="inputStream">Ссылка на стрим</label>
        <div class="controls">
            <input type="text" id="inputStream" name="stream" value="{{$channel->stream}}">
        </div>
    </div>

    <div class="control-group info">
        <label class="control-label" for="inputTv">Ссылка на программу</label>
        <div class="controls">
            <input type="text" id="inputTv" name="tv_channel" value="{{$channel->tv_channel}}">
        </div>
    </div>

    <div class="control-group info">
        <label class="control-label" for="inputCat">Категория</label>
        <div class="controls">
            <select name="category" id="inputCat">
                @foreach($categories as $category)
                    @if($channel->category==$category->id)
                        <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>

<input type="hidden" name="_method" value="put"/>
<input type="hidden" name="_token" value="{{csrf_token()}}"/>
<input type="submit" value="Сохранить" class="btn btn-primary">
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
                <li><a href="{{url('adminzone/channels/create')}}">Добавить новый</a></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
@endsection