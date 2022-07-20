<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Form\MovieFormType;
use App\Controller\TokenAuthenticatedControllerr;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController implements TokenAuthenticatedControllerr
{
    private $em;    
    private $repo;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
        $this->repo = $em->getRepository(Movie::class);
    }
    
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        
        $repository = $this->em->getRepository(Movie::class);
        $movies = $repository->findAll();
        return $this->render('movies/index.html.twig', [
            'movies' => $movies
        ]);
    }
        
       
   
    #[Route('/movies/create')]
    public function create(Request $request){
        $movie = new Movie();
        $movie->setTitle('ấdasdasdasda');
        $movie->setReleaseYear(2000);
        $form = $this->createForm(MovieFormType::class, $movie);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $newMovie = $form->getData();
            $imagePath = $form->get('imagePath')->getData();
            if($imagePath)
            {
                $newFileName = uniqid() . '.' . $imagePath->guessExtension();

                try{
                    $imagePath->move($this->getParameter('kernel.project_dir').'/public/uploads', $newFileName);
                }catch(FileException $e){
                    return new Response($e->getMessage());
                }

                $newMovie->setImagePath("/uploads/". $newFileName);
            }

            $this->em->persist($newMovie);
            $this->em->flush();

            return $this->redirectToRoute('movies');
        }
        return $this->renderForm('movies/create.html.twig',[
            'form' => $form
        ]);
    }
    
    #[Route('/movies/edit/{movie}', name: "editMovie")]
    public function edit(Movie $movie, Request $request):Response
    {
        
        $form = $this->createForm(MovieFormType::class, $movie);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) { 
            $imagePath = $form->get('imagePath')->getData();
            if($imagePath){
                if($movie->getImagePath())
                {
                    $newFileName = uniqid() . '.' . $imagePath->guessExtension();
                
                    try{
                        $imagePath->move($this->getParameter('kernel.project_dir').'/public/uploads', $newFileName);
                    }catch(FileException $e){
                        return new Response($e->getMessage());
                    }
    
                    $movie->setImagePath("/uploads/". $newFileName);

                    $this->em->persist($movie);
                    $this->em->flush();
        
                }
            }else{
                
                $movie->setTitle($form->get('title')->getData());
                $movie->setReleaseYear($form->get('releaseYear')->getData());
                $movie->setDescription($form->get('description')->getData());

                $this->em->persist($movie);
                $this->em->flush();
            } 

            return $this->redirectToRoute('movies');
        }

        return $this->renderForm('/movies/edit.html.twig',[
            'form' => $form
        ]);
    }


    
    /**
     * show
     *@Route("/show", name="old")
     * @return Response
     */
    #[Route('/movies/{movie}')]
    public function show(Movie $movie): Response{
        $movie = $this->repo->find($movie);
        return $this->render('movies/show.html.twig', ["movie" => $movie]);
    }

}