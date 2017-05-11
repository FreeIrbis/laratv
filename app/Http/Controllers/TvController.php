<?php

namespace App\Http\Controllers;

use App\Categories;
use App\Channels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class TvController extends Controller
{
    public function index()
    {
         $categories = Categories::all();
         $channels = Channels::all();
         return view("tv.index", ['channels' => $channels, 'categories' => $categories]);
    }

    public function show($tvUri)
    {
        $channel = Channels::where('uri', '=', $tvUri)->get();

        if (isset($channel[0])) {
            $category = Categories::where('id', '=', $channel[0]->category)->get();

            $data['description'] = $channel[0]->description_channel;
            $data['tv'] = $channel[0]->tv_channel;
            $data['name'] = $channel[0]->name_channel;
            $data['category'] = $category[0]->name;
            $data['categoryId'] = $category[0]->id;
            $data['stream'] = $channel[0]->stream;

            return view('tv.channel', $data);
        } else {
            return App::abort(404);
        }
    }

    public function catTv()
    {
        $categories = Categories::all();
        return view('tv.cat', ['categories' => $categories]);
    }

    public function catTvChannel($id)
    {
        $category = Categories::where('id', '=', $id)->get();
        $channels = Channels::where('category', '=', $id)->get();
        return view('tv.catChannel', ['channels' => $channels, 'category' => $category[0]]);
    }
}
