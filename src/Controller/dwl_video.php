<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    use App\Service\chellem_dwl;

    class dwl_video
    {
        #[Route('/yt-download/dwl', name: 'downloader')]
        public function getVideo(chellem_dwl $dwl, string $link): Response
        {
            $dwl->setLink($link);
            $dwl->dl_video();
        }
    }

?>