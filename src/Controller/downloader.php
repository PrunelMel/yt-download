<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    use TBETool\Downloader;

    class download
    {
        #[Route('/yt-download/dwl', name: 'downloader')]
        public function get_video(): Response
        {
            
            return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
            );
        }
    }

?>