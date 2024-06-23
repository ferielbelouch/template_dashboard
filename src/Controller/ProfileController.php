<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Document;
use App\Form\UserType;
use App\Repository\DocumentRepository;
use App\Form\DocumentType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $userPasswordHasher, DocumentRepository $documentRepository): Response
    { 
        $user = $this->getUser(); 

        $documents = new Document();
        $form = $this->createForm(DocumentType::class, $documents);
        $form->handleRequest($request);
        $embauchedocs = $documentRepository->findByCategory('embauche');
        $embauchedocs = $documentRepository->findBy(['user' => $user, 'category' => 'embauche']);
            $paiedocs = $documentRepository->findBy(['user' => $user, 'category' => 'paie']);
            $contratdocs = $documentRepository->findBy(['user' => $user, 'category' => 'contrat']);


        $forms = $this->createForm(UserType::class, $user);
        $forms->handleRequest($request);

        // if ($forms->isSubmitted() && $forms->isValid()) {
        //     $user->setPassword(
        //         $userPasswordHasher->hashPassword(
        //             $user,
        //             $forms->get('password')->getData()
        //         )
        //     );
        //         $entityManager->flush();
        //          // Afficher un message de confirmation ou rediriger vers une autre page
        //          $this->addFlash('success', 'Les modifications ont été enregistrées avec succès.');
    
        //          // Rediriger vers la page de détails de l'utilisateur
        //          return $this->redirectToRoute('app_profile');
        //         }

        if ($forms->isSubmitted() && $forms->isValid()) {
            // Récupérer le mot de passe depuis le formulaire
            $plainPassword = $forms->get('password')->getData();
        
            // Hasher le mot de passe
            $hashedPassword = $userPasswordHasher->hashPassword(
                $user,
                $plainPassword
            );
        
            // Définir le mot de passe hashé sur l'entité User
            $user->setPassword($hashedPassword);
        
            // Enregistrer les modifications dans la base de données
            $entityManager->flush();
        
            // Ajouter un message flash de confirmation
            $this->addFlash('success', 'Les modifications ont été enregistrées avec succès.');
        
            // Rediriger vers la page de profil
            return $this->redirectToRoute('app_profile');
        }
    

        
        return $this->render('profile/index.html.twig', [
            'form' => $form->createView(),
            'forms' => $forms,
            'documents' => $documents,
            'contratdocs' => $contratdocs,
            'paiedocs' => $paiedocs,
            'embauchedocs' => $embauchedocs,
        ]);
    }
}
