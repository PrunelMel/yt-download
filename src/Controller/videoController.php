<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    use Symfony\Component\HttpFoundation\RedirectResponse;
    use Symfony\Component\HttpKernel\Attribute\MapQueryParameter;
    use App\Service\chellemDwl;

    class videoController
    {
        #[Route('/yt-download/dwl', name: 'downloader')]
        public function getVideo( #[MapQueryParameter] string $url,chellemDwl $dwl): RedirectResponse
        {
            $dwl->setLink($url);
            
            if ($dwl->dwlVideo()){
                
                $message = "Video downloaded";

                return $this->redirectToRoute('dwlPage',array('message' => $message));
            }
            else{
                echo "Something went wrong. Try again";
                return $this->redirectToRoute('errorPage');
            }
        }
    }

?>