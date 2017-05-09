@extends('admin.default')

@section("title", "Каналы - Панель администратора")

@section('content')
    <blockquote>
        <p>Каналы</p>
    </blockquote>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Название</th>
            <th>URI</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>
        @foreach($channels as $channel)
            <tr>
                <td>{{$channel->id}}</td>
                <td>{{$channel->name_channel}}</td>
                <td>{{$channel->uri}}</td>
                <td>
                    <a href="{{action('ChannelsController@edit',['channel'=>$channel->id])}}" class="btn btn-info">Изменить</a>

                    <form method="POST" action="{{action('ChannelsController@destroy',['channel'=>$channel->id])}}" style="display: inline-block;margin:0;">
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="submit" value="Удалить" class="btn btn-danger" />
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
                <li class="nav-header">Каналы</li>
                <li class="active"><a href="{{url('adminzone/channels')}}">Каналы</a></li>
                <li><a href="{{url('adminzone/channels/create')}}">Добавить новый</a></li>
            </ul>
        </div><!--/.well -->
    </div><!--/span-->
@endsection