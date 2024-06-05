<?php
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    use App\Service\chellemDwl;

    class dwlPageController extends AbstractController
    {
        #[Route('/yt-download/errorPage', name: 'errorPage')]
        public function renderErrorPage()
        {
            return $this->render('errorPage.html.twig');
        }
    }
