<?php

namespace App\Controller;

use App\Repository\BlogPostRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\BlogPost;
use App\Form\PostType;


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
    #[Route('/blog/add', name: 'blog_add')]
    public function add(Request $request, EntityManagerInterface $em)
    {
         $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $blogPost = new BlogPost();
        $form = $this->createForm(PostType::class, $blogPost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($blogPost);
            $em->flush();
            return $this->redirectToRoute('blog_mainpage');
        }

        return $this->render('blog/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    // if this was not a simple blog i would have used UUID
      #[Route('/blog/edit/{id}', name: 'blog_edit')]
    public function edit(BlogPost $blogPost, Request $request, EntityManagerInterface $em)
    {
         $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $form = $this->createForm(PostType::class, $blogPost);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('blog_mainpage');
        }

        return $this->render('blog/edit.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
