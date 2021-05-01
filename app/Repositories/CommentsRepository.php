<?php

namespace Blog\Repositories;

use Blog\Comment;

class CommentsRepository extends Repository {
	
	
	public function __construct(Comment $comment) {
		$this->model = $comment;
	}
	
}

?>