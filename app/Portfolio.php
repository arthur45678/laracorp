<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    //
    
    public function filter() {
		return $this->belongsTo('Blog\Filter','filter_alias','alias');
	}
}
