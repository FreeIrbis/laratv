<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    static function initCategory($name){
        $category = new Categories();
        $category->name = $name;
        $category->save();
    }

    static function delCategorybyId($id)
    {
        Categories::find($id)->delete();
    }
}
