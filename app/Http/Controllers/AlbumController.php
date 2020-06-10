<?php
    class AlbumController extends BaseController{

        public function getDownload($unique_id)
        {

            $data = Songs::where('unique','=',$unique_id);
            

            //PDF file is stored under project/public/download/info.pdf
            $file= public_path(). $data->path;

            $headers = array(
                'Content-Type: application/mp3',
            );

            return Response::download($file, "{$data->title}.mp3", $headers);

        }
    }
?>