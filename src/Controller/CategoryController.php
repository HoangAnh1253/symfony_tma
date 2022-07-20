<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Service\CategoryService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/category')]
class CategoryController extends AbstractController
{

    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    #[Route('/', name: 'app_category_index', methods: ['GET'])]
    public function index(): Response
    {

        $categories = $this->categoryService->getAll();

        $violations = $this->categoryService->getViolations();

        return $this->render('category/index.html.twig', [
            'categories' => $categories,
            'violations' => $violations
        ]);
    }

    #[Route('/new', name: 'app_category_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $this->categoryService->add($request);
        return $this->redirectToRoute('app_category_index', []);
    }

    #[Route('/{id}', name: 'app_category_show', methods: ['GET'])]
    public function show(Category $category): Response
    {
        return $this->render('category/show.html.twig', [
            'category' => $category,
        ]);
    }

    #[Route('/api/{id}/edit', name: 'app_category_edit', methods: ['POST', 'PATCH'])]
    public function edit(Request $request, Category $category): Response
    {
        $response = $this->categoryService->edit($request, $category);
        return $this->json($response);
    }

    #[Route('/{id}/delete', name: 'app_category_delete', methods: ['POST'])]
    public function delete(Request $request, $id): Response
    {
        $this->categoryService->delete($request, $id);

        return $this->redirectToRoute('app_category_index');
    }
}