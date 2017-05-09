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
        return view("tv.index");
    }

    public function show($tvUri)
    {
        $channel = Channels::where('uri','=',$tvUri)->get();

        if(isset($channel[0]))
        {
            $category = Categories::where('id','=',$channel[0]->category)->get();

            $data['stream'] = $channel[0]->stream;
            $data['tv'] = $channel[0]->tv_channel;
            $data['name'] = $channel[0]->name_channel;
            $data['category'] = $category[0]->name;

            return view('tv.channel', $data);
        } else {
            return App::abort(404);
        }
    }
}
