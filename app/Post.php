<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}
