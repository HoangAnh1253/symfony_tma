<?php

namespace App\Service;

use App\Entity\Category;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Traits\DataValidate;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class CategoryService extends AbstractController
{

    use DataValidate;
    
    private $categoryRepository;
    private $validator;
    private $session;
    
    public function __construct(CategoryRepository $categoryRepository,  ValidatorInterface $validator, RequestStack $session){
        $this->categoryRepository = $categoryRepository;
        $this->validator = $validator;
        $this->session = $session->getSession();
    }

    public function getAll(){
        return $this->categoryRepository->findAll();
    }

    public function getAllQueryBuilder(Request $request){
        
    }

    public function getById($id){
        return $this->categoryRepository->find($id);
    }

    public function remove(Category $category){
        return $this->categoryRepository->remove($category);
    }

    public function add(Request $request){
        $payload = $request->request->all();
        $payload['name'] = $payload['title'];
        $isCsrfValid = $this->isCsrfTokenValid('add-item', $payload['token']);
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->submit($payload);

        if ($form->isSubmitted() && $isCsrfValid) {
            $violations = $this->validator->validate($category);
            if (count($violations) > 0) {
                $this->session->set('violations', $violations);
            } else {
                $this->categoryRepository->add($category, true);
            }
        }
    }

    public function edit(Request $request, Category $category){
        try {
            $payload = json_decode($request->getContent(), true);
            $payload['name'] = $payload['title'];
            $form = $this->createForm(CategoryType::class, $category);
            $form->submit($payload);
            
            if ($form->isSubmitted()) {
                $violations = $this->validator->validate($category);
                if (count($violations) > 0) {
                    $this->session->set('violations', $violations);
                } else {
                    $this->categoryRepository->add($category, true);
                    return $category->jsonSerialize();
                }
                return [
                    "error" => true
                ];
            }
            
        } catch (Exception $e) {
            return [
                "error" => $e->getMessage()
            ];
        }
    }

    public function delete(Request $request, $id){
        if ($this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            try{
                $category = $this->categoryRepository->find($id);
                if($category)
                {
                    $this->categoryRepository->remove($category, true);
                    
                }
                else
                {
                    $this->session->set('errors', ['category has already been deleted']);
                    return false;   
                }
            }catch(Exception $e){
                $this->session->set('errors', [$e->getMessage()]);
                return false;
            }
        }
        return true;
    }

    public function getViolations(){
        $violations =  $this->session->get('violations');
        $this->session->set('violations', null);
        return $this->correctViolationsMessage($violations);
    }
}