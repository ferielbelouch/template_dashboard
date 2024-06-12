<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use TCPDF;

class UserGenPdfController extends AbstractController
{
    #[Route('/genpdf', name: 'user_pdf')]
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
                    <th>Email</th>
                  </tr>';

        foreach ($users as $user) {
            $html .= '<tr>
                        <td>' . $user->getId() . '</td>
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
