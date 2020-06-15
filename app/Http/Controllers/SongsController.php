<?php
namespace App\Http\Controllers;

use App\Downloads;
use App\Song;
use Illuminate\Support\Facades\Response;

class SongsController extends Controller{

    public function getDownload($unique_id)
    {

        $data = Song::where('unique_id','=',$unique_id)->first();



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