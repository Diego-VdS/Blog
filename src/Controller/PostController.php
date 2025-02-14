<?php

namespace App\Controller;

use App\Repository\BlogPostRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Comment;


final class PostController extends AbstractController
{
        #[Route('/comment/{id}/delete', name: 'comment_delete', methods: ['POST'])]

    public function deleteComment(Comment $comment, EntityManagerInterface $em): Response
    {
        if (!$this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('blog_mainpage');
        }
        $em->remove($comment);
        $em->flush();

        $this->addFlash('success', 'Comment deleted successfully.');

        // Redirect
        return $this->redirectToRoute('blog_show', ['id' => $comment->getComment()->getId()]);
    }
}