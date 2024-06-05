<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    use Symfony\Component\HttpFoundation\RedirectResponse;
    use App\Service\chellemDwl;

    class videoController
    {
        #[Route('/yt-download/dwl', name: 'downloader')]
        public function getVideo(chellemDwl $dwl, string $link): RedirectResponse
        {
            $dwl->setLink($link);
            
            if ($dwl->dwlVideo()){
                
                echo "Video downloaded";

                return $this->redirectToRoute('');
            }
            else{
                echo "Something went wrong. Try again";
            }
        }
    }

?>