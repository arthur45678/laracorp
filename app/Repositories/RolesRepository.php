<?php

namespace Blog\Repositories;

use Blog\Role;

class RolesRepository extends Repository {
	
	
	public function __construct(Role $role) {
		$this->model = $role;
	}
	
}

?>