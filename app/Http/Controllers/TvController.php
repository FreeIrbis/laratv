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
    {   /*Categories::initCategory('Члены зелёные');
        Categories::initCategory('Хуи дрочёные');
        Channels::initChannel('tnt',
            'ТНТ',
            'Трэшер',
            '1',
            'http://178.162.205.110:8081/liveg/tnt.stream/playlist.m3u8?wmsAuthSign=c2VydmVyX3RpbWU9NS85LzIwMTcgODo1ODoyMyBBTSZoYXNoX3ZhbHVlPVdKTllyT3ZUVkNOTzJrdnBTcTlrWnc9PSZ2YWxpZG1pbnV0ZXM9MjAw or http://178.162.205.107:8081/liveg/tntb.stream/playlist.m3u8?wmsAuthSign=c2VydmVyX3RpbWU9NS85LzIwMTcgODo1ODoyMyBBTSZoYXNoX3ZhbHVlPVdKTllyT3ZUVkNOTzJrdnBTcTlrWnc9PSZ2YWxpZG1pbnV0ZXM9MjAw',
            'ZALUP KA');*/

        Categories::delCategorybyId(1);
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
