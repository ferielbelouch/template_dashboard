<?php

namespace App\Controller;

use App\Repository\OperationRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Dompdf\Dompdf;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class HomeController extends AbstractController
{
    #[IsGranted("ROLE_ADMIN")]
    #[Route('/dashboard', name: 'app_home')]
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

    #[Route('/generate-pdf-dashboard', name: 'generate_pdf_dashboard')]
    public function generatePdf(UserRepository $userRepository, OperationRepository $operationRepository): Response
    {
        $FourLastestUser = $userRepository->findFourLastestUser();
    
        $numOperationRealise = $operationRepository->countByStatus('realise');
        $numOperationEnCours = $operationRepository->countByStatus('enCours');
        $numTotalUsers = $userRepository->countTotalUsers();
    
        $html = $this->renderView('pdf/dashboard.html.twig', [
            'FourLastestUser' => $FourLastestUser,
            'numOperationRealise' => $numOperationRealise,
            'numOperationEnCours' => $numOperationEnCours,
            'numTotalUsers' => $numTotalUsers,
        ]);

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return new Response($dompdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="dashboard.pdf"',
        ]);
    }
}
