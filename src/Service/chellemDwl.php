<?php
    namespace App\Service;

    use Youtubedl\Youtubedl;


    class chellemDwl
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

        public function dwlVideo(): bool
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