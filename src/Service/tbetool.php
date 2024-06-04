<?php
    namespace App\Service;

    use TBETool\Downloader;

    class MessageGenerator
    {
        public function dl_video(): string
        {
            $downloader = new Downloader(FFMPEG_PATH, YOUTUBE-DL_PATH);

            return $messages[$index];
        }
    }    

?>