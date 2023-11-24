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
        if (strpos($prenom, '-') !== false) {
            $errorResponse = new Response('Le prénom ne doit pas contenir de tirets.');
            $errorResponse->setStatusCode(Response::HTTP_BAD_REQUEST); 
            return $errorResponse;
        }
        return new Response('Prénom spécifié : ' . $prenom);
    }
}