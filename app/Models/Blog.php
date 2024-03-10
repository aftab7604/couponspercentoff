<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'title',
        'content',
        'slug',
        'focus_keyword',
        'meta',
        'status',
    ];

    public function categories(){
        return $this->belongsToMany('App\Models\Category','blog_category',"blog_id","category_id");
    }

   
}
