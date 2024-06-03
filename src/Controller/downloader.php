<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;

    class downloader
    {
        #[Route('/yt-download/dwl', name: 'downloader')]
        public function number(): Response
        {
            
            return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
            );
        }
    }

?>