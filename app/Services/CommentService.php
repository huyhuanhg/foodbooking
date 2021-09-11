<?php

namespace App\Services;


use App\Repositories\Interfaces\CommentInterface;

class CommentService
{
    protected $comment;

    public function __construct(CommentInterface $comment)
    {
        $this->comment = $comment;
    }

}
