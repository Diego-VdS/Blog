<?php

namespace App\Controller;

use App\Repository\BlogPostRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BlogController extends AbstractController
{
    #[Route('/', name: 'blog_mainpage')]
   public function index(BlogPostRepository $blogPostRepository): Response
{
        $criteria = [];
          $sortField = 'createdAt';
    $sortOrder = 'DESC';
    $posts = $blogPostRepository->findByValue($sortField, $sortOrder);
    return $this->render('blog/index.html.twig', ['posts' => $posts]);
}
}
