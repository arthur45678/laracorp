<?php

namespace Blog\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Blog\Http\Requests;
use Blog\Http\Controllers\Controller;


use Gate;

class IndexController extends AdminController
{
    //
    
    public function __construct() {
		
		parent::__construct();
		
		if(Gate::denies('VIEW_ADMIN')) {
			abort(403);
		}
		
		
		$this->template = config('settings.theme').'.admin.index';
		
	}
	
	public function index() {
		$this->title = 'Admin';
		
		return $this->renderOutput();
		
	}
}
