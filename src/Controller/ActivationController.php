<?php

namespace App\Controller;

use App\Entity\Activation;
use App\Form\ActivationType;
use App\Repository\ActivationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/activation')]
class ActivationController extends AbstractController
{
    #[Route('/', name: 'app_activation', methods: ['GET'])]
    public function index(ActivationRepository $activationRepository): Response
    {
        return $this->render('activation/index.html.twig', [
            'activations' => $activationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_activation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $activation = new Activation();
        $form = $this->createForm(ActivationType::class, $activation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($activation);
            $entityManager->flush();

            return $this->redirectToRoute('app_activation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activation/new.html.twig', [
            'activation' => $activation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activation_show', methods: ['GET'])]
    public function show(Activation $activation): Response
    {
        return $this->render('activation/show.html.twig', [
            'activation' => $activation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_activation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Activation $activation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ActivationType::class, $activation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_activation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('activation/edit.html.twig', [
            'activation' => $activation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_activation_delete', methods: ['POST'])]
    public function delete(Request $request, Activation $activation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activation->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($activation);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_activation_index', [], Response::HTTP_SEE_OTHER);
    }
}
