<?php

namespace Blog\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

use Blog\User;

class PermissionPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    
    public function change(User $user) {
    	
    	//EDIT_PERMISSIONS
		return $user->canDo('EDIT_USERS');
	}
}
