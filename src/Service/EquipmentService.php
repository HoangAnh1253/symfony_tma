<?php

namespace App\Service;

use App\Entity\Assign;
use App\Entity\Equipment;
use App\Entity\User;
use App\Form\EquipmentType;
use App\Repository\AssignRepository;
use App\Repository\EquipmentRepository;
use App\Repository\UserRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Traits\DataValidate;
use DateTime;
use Exception;

class EquipmentService extends AbstractController
{

    use DataValidate;

    private $categoryService;
    private $equipmentRepository;
    private $assignRepository;
    private $paginator;
    private $session;
    private $validator;
    private $userRepository;

    public function __construct(EquipmentRepository $equipmentRepository, PaginatorInterface $paginator, RequestStack $session, CategoryService $categoryService, ValidatorInterface $validator, AssignRepository $assignRepository, UserRepository $userRepository)
    {
        $this->equipmentRepository = $equipmentRepository;
        $this->paginator = $paginator;
        $this->session = $session->getSession();
        $this->categoryService = $categoryService;
        $this->validator = $validator;
        $this->assignRepository = $assignRepository;
        $this->userRepository = $userRepository;
    }

    public function getAll()
    {
        return $this->equipmentRepository->findAll();
    }

    public function getAllPaginate(Request $request)
    {
        $queryBuilder = $this->equipmentRepository->getAllQueryBuilder();

        return $this->paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5
        );
    }

    public function getWherePaginate(Request $request, $field, $value)
    {
        $queryBuilder = $this->equipmentRepository->findWithFieldQueryBuilder($field, $value);
        return $this->paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5
        );
    }

    public function addEquipment(Request $request)
    {
        $payload = $request->request->all();

        $isCsrfValid = $this->isCsrfTokenValid('add-item', $payload['token']);
        unset($payload['token']);
        $payload['category'] = $this->categoryService->getById($payload['category']);

        $equipment = new Equipment();
        $form = $this->createForm(EquipmentType::class, $equipment);
        $form->submit($payload);

        if ($form->isSubmitted() && $isCsrfValid) {
            $violations = $this->validator->validate($equipment);
            if (count($violations) > 0) {
                $this->session->set('violations', $violations);
            } else {
                $this->equipmentRepository->add($equipment, true);
            }
        }
    }

    public function editEquipment(Request $request, Equipment $equipment){
        try {
            $payload = json_decode($request->getContent(), true);
            $payload['category'] = $equipment->getCategory();
        
            $form = $this->createForm(EquipmentType::class, $equipment);
            $form->submit($payload);
            
            if ($form->isSubmitted()) {
                $violations = $this->validator->validate($equipment);
                if (count($violations) > 0) {
                    $this->session->set('violations', $violations);
                } else {
                    $this->equipmentRepository->add($equipment, true);
                    return $equipment->jsonSerialize();
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

    public function assignEquipment(Request $request, Equipment $equipment){
        try{
            $payload = json_decode($request->getContent(), true);
            $user = $this->userRepository->find($payload['user_id']);
            $assign = new Assign();
            $assign->setUser($user);
            $assign->setEquipment($equipment);
            $assign->setStartDate(new DateTime('now'));
            $this->assignRepository->add($assign, true);
            
        }catch (Exception $e) {
            return [
                "error" => $e->getMessage()
            ];
        }
        return $user->jsonSerialize();
    }

    public function unAssignEquipment(Equipment $equipment){
        try{
            $assign = $this->assignRepository->findOneBy([
                'equipment' => $equipment
            ]);

            $this->assignRepository->remove($assign, true);
        }catch (Exception $e) {
            return[
                "error" => $e->getMessage()
            ];
        }
        return [
           'message' => 'success'
        ];
    } 

    public function deleteEquipment(Request $request, $id){
        if ($this->isCsrfTokenValid('delete', $request->request->get('token'))) {
            try{
                $equipment = $this->equipmentRepository->find($id);
                if($equipment)
                    $this->equipmentRepository->remove($equipment, true);
                else
                {
                    $this->session->set('errors', ['equipment has already been deleted']);
                    return false;   
                }
            }catch(Exception $e){
                $this->session->set('errors', [$e->getMessage()]);
                return false;
            }
        }
        return true;
    }

    public function getEquipmentOfUserPaginate(Request $request, User $user){
        $queryBuilder = $this->equipmentRepository->findEquipmentWithUserQueryBuilder($user);
        return $this->paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            5
        );
    }

    public function getViolations(){
        $violations =  $this->session->get('violations');
        $this->session->set('violations', null);
        return $this->correctViolationsMessage($violations);
    }

    public function getErrors(){
        $errors = $this->session->get('errors');
        $this->session->set('errors', null);
        return $errors;
    }
}