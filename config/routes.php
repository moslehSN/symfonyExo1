<?php
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

return function (RoutingConfigurator $routes) {
    $routes->add('client_prenom', '/client/prenom/{prenom}')
        ->controller('App\Controller\ClientController::info')
        ->methods(['GET', 'HEAD'])
        ->requirements([
            'prenom' => '[A-Za-z]+', // Seules les lettres alphabétiques sont autorisées pour le prénom
        ]);
};
?>