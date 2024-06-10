<?php
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;

    class errorPageController extends AbstractController
    {
        #[Route('/yt-download/errorPage', name: 'errorPage')]
        public function renderErrorPage():Response
        {
            return $this->render('errorPage.html.twig');
        }
    }
