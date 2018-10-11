<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function categories()
    {
        return $this->belongsToMany('App\category', 'category_posts')->withTimeStamps();
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
