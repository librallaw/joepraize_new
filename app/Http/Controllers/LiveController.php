<?php

class LiveController extends BaseController{

   


    public function addcomments()

    {
        $data = new Comments();
        $data->first_name = Input::get('first_name');
        $data->last_name = Input::get('last_name');
        $data->comments = Input::get('comments');
        $data->unix_time = time();

        $data->save();

        return Redirect::back()->with('message','Comment added successfully');

        //$data->first_name = Input::get('first_name');
    }
    
    
    public function showLive()
    {
         return View::make('live');
    }

    public function getcomments()
    {

        $data = Comments::all();

        foreach($data as $dat){


           ?>
            <div class="content-cmt">
                <span class="name-cmt"><?php $dat->first_name." ".$dat->last_name ?></span>
                <span class="date-cmt"></span>
                <p class="content-reply">
                   <?php ucfirst(strtolower($dat->expectation));?>
                </p>
            </div>

            <?php




            echo "$dat->first_name";
        }

       // return View::make('live');
    }
}
?>