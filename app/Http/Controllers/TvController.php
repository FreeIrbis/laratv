<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TvController extends Controller
{

    public function index()
    {
        return "index!";
    }

    public function show($tvUri)
    {
        switch($tvUri)
        {
            case '2-plus-2': return view('tv.2plus2'); break;
            default: return App::abort(404);;
        }
    }


}
