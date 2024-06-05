<?php
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;

    class errorPageController extends AbstractController
    {
        #[Route('/yt-download/dwlPage', name: 'dwlPage')]
        public function renderDwlPage():Response
        {
            return $this->render('dwlPage.html.twig');
        }
    }
