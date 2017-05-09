<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TvController extends Controller
{

    public function index()
    {
        return view("tv.index");
    }

    public function show($tvUri)
    {
        // выборка записей из таблицы channel
        // $channel=Channel::where('uri','=',$tvUri);

        if($tvUri == '2-plus-2')
        {
            $data['stream'] = '192.168.0.1';
            $data['tv'] = 'tv.yandex.ru';
            $data['name'] = '2+2';
            return view('tv.channel', $data);
        } else if($tvUri == 'stb')
        {
            $data['stream'] = '240.2.0.127';
            $data['tv'] = 'tv.yandex.ru';
            $data['name'] = 'СТБ';
            return view('tv.channel', $data);
        } else {
            return App::abort(404);
        }
    }


}
