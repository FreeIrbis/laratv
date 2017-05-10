<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Channels;
use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    public function index()
    {
        $channels = Channels::all();
        return view('admin.channels.index', ['channels'=>$channels]);
    }

    public function edit($id)
    {
        $categories=Categories::all();
        $channel=Channels::find($id);
        return view('admin.channels.edit',['channel'=>$channel, 'categories'=>$categories]);
    }

    public function update(Request $request, $id)
    {
        $channel=Channels::find($id);
        $channel->update($request->all());
        $channel->save();
        return back()->with('message','Канал обновлен');
    }

    public function destroy($id)
    {
        $channel=Channels::find($id);
        $channel->delete();
        return back()->with(['message'=>"Канал ".$channel->name_channel." удален"]);
    }

    public function create()
    {
        $categories=Categories::all();
        return view('admin.channels.create', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        Channels::create($request->all());
        return back()->with('message','');
    }

    public function show($id)
    {
        $stream = Channels::where('id','=',$id)->get()[0]->stream;
        $tv = file_get_contents($stream);
        $tv = str_replace('/swf/uppod161216.swf', 'https://www.glaz.tv/swf/uppod161216.swf', $tv);
        $tv = str_replace('top.location.href = location.href;', ' ', $tv);
        $tv = str_replace('<script type="text/javascript" src="/js/main.js"></script>', ' ', $tv);
        $tv = str_replace('uppodEvent(\'video-player\', \'init\');', ' ', $tv);
        $tv = str_replace('<link rel="stylesheet" type="text/css" href="/css/popup/styles.css"/>', ' ', $tv);
        $tv = str_replace('checkStream(normalTimeout);', ' ', $tv);


        return $tv;
    }
}