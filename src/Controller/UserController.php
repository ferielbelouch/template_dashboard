<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use TCPDF;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/user')]
class UserController extends AbstractController
{
    private $kernel;

    public function __construct(KernelInterface $kernel)
        {
            $this->kernel = $kernel;
        }

    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    
    #[Route('/{id}', name: 'app_user_show', methods: ['GET', 'POST'])]
    public function show(User $user, Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher,): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
            $entityManager->flush();
            
            // Afficher un message de confirmation ou rediriger vers une autre page
            $this->addFlash('success', 'Les modifications ont été enregistrées avec succès.');

            // Rediriger vers la page de détails de l'utilisateur
            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }
        
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }
    


    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/generate', name: 'app_user_generate')]
    public function gen(User $user): Response
    {
        
        if($user) {
            $this->generatePdf($user);
        }
        
        return $this->render('user/index.html.twig', [
            'user' => $user,
        ]);
    }
    
    private function generatePdf(User $user)
    {
        $pdf = new TCPDF();
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('User PDF');
        $pdf->SetSubject('User Details');
        $pdf->SetKeywords('TCPDF, PDF, User');

        $pdf->setPrintHeader(false);
        $pdf->setPrintFooter(false);

        $pdf->AddPage();

        $html = '<h1>User Details</h1>';
        $html .= '<p><strong>user ID:</strong> ' . $user->getId() . '</p>';
        $html .= '<p><strong>Date:</strong> ' . $user->getCreatedAt()->format('Y-m-d H:i:s') . '</p>';
        $html .= '<p><strong>Email:</strong> ' . $user->getEmail() . '</p>';
        $html .= '<h2>Details</h2>';
        $html .= '<table border="1" cellpadding="5">
                    <thead>
                        <tr>
                            <th>Ticket</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>';

        $html .= '  </tbody>
                </table>';

        $pdf->writeHTML($html, true, false, true, false, '');

        $publicDirectory = $this->kernel->getProjectDir() . '/public/genPDF/';

        // Générez le chemin complet pour le fichier PDF
        $filePath = $publicDirectory . 'user_' . $user->getId() . '.pdf';

        $pdf->Output($filePath, 'F');
    }
}
