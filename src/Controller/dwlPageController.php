<?php
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    use App\Service\chellem_dwl;

    class dwlPageController extends AbstractController
    {
        #[Route('/yt-download/dwl_page', name: 'dwl_page')]
        public function render_dwl_page()
        {
            return $this->render('dwl_page.html.twig');
        }
    }
