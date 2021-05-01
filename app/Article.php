<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    
    protected $fillable = ['title','img','alias','text','desc','keywords','meta_desc','category_id'];
	
    
    
    public function user() {
		return $this->belongsTo('Blog\User');
	}
	
	public function category() {
		return $this->belongsTo('Blog\Category');
	}
	
	public function comments()
    {
        return $this->hasMany('Blog\Comment');
    }	
	
}
