<?php

namespace App\Controller;

use App\Repository\BlogPostRepository; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\BlogPost;
use App\Entity\Comment;
use App\Form\PostType;
use App\Form\AnonymousCommentType;


final class BlogController extends AbstractController
{
    #[Route('/', name: 'blog_mainpage')]
    public function index(BlogPostRepository $blogPostRepository): Response
{
        $criteria = [];
        $sortField = 'createdAt';
        $sortOrder = 'DESC';
        $posts = $blogPostRepository->findBy([], [$sortField => $sortOrder]);
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
   #[Route('/blog/{id}', name: 'blog_show')]
    public function show(int $id, BlogPostRepository $blogPostRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $post = $blogPostRepository->find($id);
        if (!$post) {
            throw $this->createNotFoundException('The post does not exist');
        }

        $comment = new Comment();
        $comment->setComment($post);

        $form = $this->createForm(AnonymousCommentType::class, $comment);
        $form->handleRequest($request);

        // Handle form submission
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();

            // Redirect (reload page)
            return $this->redirectToRoute('blog_show', ['id' => $post->getId()]);
        }

        // Fetch all comments to print
        $comments = $post->getComments();

        return $this->render('blog/show.html.twig', [
            'post' => $post,
            'form' => $form->createView(),
            'comments' => $comments,
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
    #[Route('/blog/{id}/delete', name: 'blog_delete', methods: ['POST'])]
    public function delete(BlogPost $post, EntityManagerInterface $entityManager): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');    
        foreach ($post->getComments() as $comment) {
        $entityManager->remove($comment);
    }
        // Remove the post
        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'post verwijderd!');
        
        return $this->redirectToRoute('blog_mainpage');
    }

}
