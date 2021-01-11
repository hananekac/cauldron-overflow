<?php

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController{

    /**
     * @Route("comments/{id}/vote/{direction}")
     */
    public function commentVote($id, $direction){
        if ($direction=="up"){
            $current_comment_vote = rand(7,100);
        }
        else
            $current_comment_vote = rand(0,5);

        return $this->json(["vote" => $current_comment_vote]);
    }

}