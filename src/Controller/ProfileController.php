<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Document;
use App\Repository\DocumentRepository;
use App\Form\DocumentType;
use Symfony\Component\HttpFoundation\Request;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(Request $request, EntityManagerInterface $entityManager, DocumentRepository $documentRepository): Response
    { 
        $user = $this->getUser();

        $documents = new Document();
        $form = $this->createForm(DocumentType::class, $documents);
        $form->handleRequest($request);
        $embauchedocs = $documentRepository->findByCategory('embauche');
        $embauchedocs = $documentRepository->findBy(['user' => $user, 'category' => 'embauche']);
            $paiedocs = $documentRepository->findBy(['user' => $user, 'category' => 'paie']);
            $contratdocs = $documentRepository->findBy(['user' => $user, 'category' => 'contrat']);

        return $this->render('profile/index.html.twig', [
            'form' => $form->createView(),
            'documents' => $documents,
            'contratdocs' => $contratdocs,
            'paiedocs' => $paiedocs,
            'embauchedocs' => $embauchedocs,
        ]);
    }
}
