<?php
    use Symfony\Bundle\FrameworkBundle\Controller\TemplateController;
    use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

    return function (RoutingConfigurator $routes): void {
        $routes->add('home', '/yt-download')
            ->controller(TemplateController::class)
            ->defaults([
                'template'  => 'homepage.html.twig',
                'statusCode' => 200


            ])
        ;
    };
?>