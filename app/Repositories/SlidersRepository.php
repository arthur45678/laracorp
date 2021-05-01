<?php

namespace Blog\Repositories;

use Blog\Slider;

class SlidersRepository extends Repository {
	
	
	public function __construct(Slider $slider) {
		$this->model = $slider;
	}
	
}

?>