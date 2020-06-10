<?php
class SongsController extends BaseController{

    public function getDownload($unique_id)
    {

        $data = Songs::where('unique_id','=',$unique_id)->first();



        $file= public_path(). $data->media_path;

        dd($file);

        $headers = array(
            'Content-Type: application/mp3',
        );


        $downloads = new Downloads();
        $downloads->unique_id = $unique_id;
        $downloads->unix_time = time();
        $downloads->save();

        return Response::download($file, "{$data->title}.mp3", $headers);



    }



    public function ticketDownload($file)
    {


        $fileee= public_path().'/event/output/'.$file;

        $headers = array(
            'Content-Type: image/jpg',
        );

        return Response::download($fileee, "Praise_Ovation.jpg", $headers);



    }
}
?>