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
        /*
        DB::table('categories')->insert(
            ['name' => 'Русськи письки']
        );
        DB::table('categories')->insert(
            ['name' => 'Черни письки']
        );

        DB::table('channels')->insert(
            [
                'uri' => '2-plus-2',
                'name_channel' => '2+2',
                'description_channel' => 'Говно ебаное',
                'category' => '1',
                'stream' => 'говноссылка',
                'tv_channel' => 'ссылкаговно'
            ]
        );

        DB::table('channels')->insert(
            [
                'uri' => 'stb',
                'name_channel' => 'СТБ',
                'description_channel' => 'Говно ебаное',
                'category' => '2',
                'stream' => 'говноссылка',
                'tv_channel' => 'ссылкаговно'
            ]
        );
         */

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
