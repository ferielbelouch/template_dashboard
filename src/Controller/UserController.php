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
use Dompdf\Dompdf;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use App\Entity\Document;
use App\Repository\DocumentRepository;
use App\Form\DocumentType;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/generate-pdf', name: 'generate_pdf')]
    public function generatePdf(UserRepository $userRepository): Response
    {
        // $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        $users = $userRepository->findAll();

        $html = $this->renderView('pdf/index.html.twig', [
            'users' => $users,
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
            'Content-Disposition' => 'inline; filename="users.pdf"',
        ]);
    }

    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('password')->getData()
                )
            );
           
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
    public function show(User $user, Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher,  DocumentRepository $documentRepository): Response
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
             return $this->redirectToRoute('app_profile');
            }

            $document = new Document();
            $forms = $this->createForm(DocumentType::class, $document);
            $forms->handleRequest($request);
           
    
            if ($forms->isSubmitted() && $forms->isValid()) {
                $document->setUser($user);
                $entityManager->persist($document);
                $entityManager->flush();
    
                $this->addFlash('success', 'Document uploaded successfully.');
                return $this->redirectToRoute('app_profile');
            }

            $embauchedocs = $documentRepository->findBy(['user' => $user, 'category' => 'embauche']);
            $paiedocs = $documentRepository->findBy(['user' => $user, 'category' => 'paie']);
            $contratdocs = $documentRepository->findBy(['user' => $user, 'category' => 'contrat']);
    
            $documents = $documentRepository->findBy(['user' => $user]);

           
        
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'form' => $form,
            'forms' => $forms,
            'documents' => $documents,
            'contratdocs' => $contratdocs,
            'paiedocs' => $paiedocs,
            'embauchedocs' => $embauchedocs,
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

   
}
