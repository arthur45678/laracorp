<?php

namespace Blog;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    
    public function roles() {
		return $this->belongsToMany('Blog\Role','permission_role');
	}
}
