<?php
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    use App\Service\chellemDwl;

    class dwlPageController extends AbstractController
    {
        #[Route('/yt-download/dwlPage', name: 'dwlPage')]
        public function renderDwlPage()
        {
            return $this->render('dwlPage.html.twig');
        }
    }
