<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    
    protected $fillable = ['name', 'category_id', 'language', 'lead_actor', 'time', 
    'film_direction', 'premiere', 'screenwriter', 'music_by','image','video','description'];

}
