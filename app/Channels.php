<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    protected $table='channels';
    protected $fillable=['uri', 'name_channel', 'description_channel', 'stream', 'tv_channel', 'category'];
}
