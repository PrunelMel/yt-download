<?php
    namespace App\Service;

    use Youtubedl\Youtubedl;


    class chellem_dwl
    {

        private string $link;

        public function setLink(string $link)
        {
            $this->link = $link;
        }

        public function getLink()
        {
            return $this->link;
        }

        public function dl_video(): bool
        {
            try{
                
                $youtubedl=new Youtubedl();
                
                $youtubedl->getOption()
                    ->setOutput("\"/tmp/%(title)s.%(ext)s\"");      
                
                $youtubedl->download($this->link)
                        ->execute();
                
                return True;
            }
            catch(Exception $e){
                echo $e->getMessage();
                return False;
            }
        }

                
    }    

?>