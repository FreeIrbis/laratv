<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    protected $table='channels';

    static function initChannel($uri,$name_channel,$description_channel,$category,$stream,$tv_channel)
    {
        $channel= new Channels();
        $channel->uri = $uri;
        $channel->name_channel = $name_channel;
        $channel->description_channel = $description_channel;
        $channel->category = $category;
        $channel->stream = $stream;
        $channel->tv_channel = $tv_channel;
        $channel->save();
    }

    static function delChannelbyId($id)
    {
        Channels::find($id)->delete();
    }
}
