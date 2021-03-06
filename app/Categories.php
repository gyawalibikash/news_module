<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categories extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'display_name',
    ];

    protected $dates = ['deleted_at'];

    public function news()
    {
        return $this->belongsToMany('App\News');
    }
}
