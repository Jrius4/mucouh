<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['uuid','image_url','view_count','title','body','author','category','published'];
}
