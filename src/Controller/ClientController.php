<?php
// src/Controller/ClientController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClientController
{
    /**
     * @Route("/client/prenom/{prenom}", name="client_prenom", methods={"GET", "HEAD"})
     */
    public function info($prenom): Response
    {
     
        return new Response('Prénom spécifié : ' . $prenom);
    }
}
