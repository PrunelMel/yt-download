<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    use Symfony\Component\HttpFoundation\RedirectResponse;
    use App\Service\chellemDwl;

    class dwl_video
    {
        #[Route('/yt-download/dwl', name: 'downloader')]
        public function getVideo(chellem_dwl $dwl, string $link): RedirectResponse
        {
            $dwl->setLink($link);
            
            if ($dwl->dl_video()){
                
                echo "Video downloaded";
            }
            else{
                echo "Something went wrong. Try again";
            }
        }
    }

?>