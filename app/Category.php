<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function parent ()
    {
        return $this->belongTo(Category::class,'parent_id');
    }
}
