<?php

namespace App\Controller;

use App\Repository\OperationRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(UserRepository $userRepository, OperationRepository $operationRepository): Response
    {
        $FourLastestUser = $userRepository->findFourLastestUser();
    
        $numOperationRealise = $operationRepository->countByStatus('realise');
        $numOperationEnCours = $operationRepository->countByStatus('enCours');
        $numTotalUsers = $userRepository->countTotalUsers();
    
        return $this->render('home/index.html.twig', [
            'FourLastestUser' => $FourLastestUser,
            'numOperationRealise' => $numOperationRealise,
            'numOperationEnCours' => $numOperationEnCours,
            'numTotalUsers' => $numTotalUsers,
        ]);
    }
}
