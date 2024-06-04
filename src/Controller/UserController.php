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

    public function generatePdf(UserRepository $userRepository): Response
    {
        // Récupérer toutes les lignes de la table user
        $users = $userRepository->findAll();

        // Créer un nouvel objet TCPDF
        $pdf = new TCPDF();

        // Configurer le document PDF
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Votre Nom');
        $pdf->SetTitle('Liste des utilisateurs');
        $pdf->SetSubject('Liste des utilisateurs');
        $pdf->SetKeywords('TCPDF, PDF, example, test, guide');

        // Ajouter une page
        $pdf->AddPage();

        // Définir la police
        $pdf->SetFont('helvetica', '', 12);

        // Contenu du PDF
        $html = '<h1>Liste des utilisateurs</h1>';
        $html .= '<table border="1" cellspacing="3" cellpadding="4">';
        $html .= '<tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                  </tr>';

        foreach ($users as $user) {
            $html .= '<tr>
                        <td>' . $user->getId() . '</td>
                        <td>' . $user->getUsername() . '</td>
                        <td>' . $user->getEmail() . '</td>
                      </tr>';
        }

        $html .= '</table>';

        // Imprimer le contenu HTML
        $pdf->writeHTML($html, true, false, true, false, '');

        // Renvoyer la réponse en tant que PDF
        $response = new Response($pdf->Output('liste_utilisateurs.pdf', 'I'));

        // Définir les en-têtes appropriés pour le fichier PDF
        $response->headers->set('Content-Type', 'application/pdf');

        return $response;
    }
}
