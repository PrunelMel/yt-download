<?php
    use Symfony\Bundle\FrameworkBundle\Controller\TemplateController;
    use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

    return function (RoutingConfigurator $routes): void {

        
        $routes->add('home', '/')
            ->controller(TemplateController::class)
            ->methods(['GET'])
            ->defaults([
                'template'  => 'homepage.html',
                'statusCode' => 200


            ])
        ;

        
    };
?>