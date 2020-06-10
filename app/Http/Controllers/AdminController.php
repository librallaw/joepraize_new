<?php
    class AdminController extends BaseController{

        public function login()
        {
            return View::make('admin/login');
        }


        public function shop()
        {
            return View::make('admin/shop');
        }

        public function viewShop()
        {
            $details['details'] = Shop::orderBy('id', 'desc')->get();

            return View::make('admin.viewShop',$details);
        }


        public function adminShopprocess()
        {
            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {
                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
               //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                           $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }

            if(empty(Input::file('image'))){

                $note[] = "No banner uploaded, default would be used";

            }


            $rules = array('title'=>'required');

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::to('admin/shop')->withErrors($validator);
            }else{

                //if(empty(Input::get('spiritcoco')))

                if(empty(Input::get('spiritcoco')))
                {
                    $spritcoco = '#';
                    $note[] = "No link uploaded for Spiritcoco";
                }

                else
                {
                    $spritcoco = trim(Input::get('spiritcoco'));
                }

                if(empty(Input::get('itunes')))
                {
                    $itunes = '#';
                    $note[] = "No link uploaded for itunes";
                }

                else
                {
                    $itunes = Input::get('itunes');
                }

                if(empty(Input::get('soundcloud'))){
                    $soundcloud = '#';
                    $note[] = "No link uploaded for soundcloud";
                }

                else{
                    $soundcloud = Input::get('soundcloud');
                }

                $details = new Shop();
                $details -> title = trim(Input::get('title'));
                $details -> banner  = $banner;
                $details -> spiricoco = $spritcoco;
                $details -> itunes = $itunes;
                $details -> soundcloud =$soundcloud;
                $details -> save();

                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was uploaded succesfully")->with('note',$note)->with('type','success');
            }



        }


        public function editShop($id)
        {
            //echo $id;exit;
            $details['details'] = Shop::where('id',$id)->first();
           //dd($details);

            return View::make('admin.editShop',$details);
        }





        public function editShopProcess($id)
        {

            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {

                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }


            if(empty(Input::file('image'))){
                $banner = Input::get('banner');
                $note[] = "No banner uploaded, default would be used";

            }

           


            $rules = array('title'=>'required');

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator);
            }else{

                //if(empty(Input::get('spiritcoco')))

                if(empty(Input::get('spiritcoco')))
                {
                    $spritcoco = '#';
                    $note[] = "No link uploaded for Spiritcoco";
                }

                else
                {
                    $spritcoco = trim(Input::get('spiritcoco'));
                }

                if(empty(Input::get('itunes')))
                {
                    $itunes = '#';
                    $note[] = "No link uploaded for itunes";
                }

                else
                {
                    $itunes = Input::get('itunes');
                }

                if(empty(Input::get('soundcloud'))){
                    $soundcloud = '#';
                    $note[] = "No link uploaded for soundcloud";
                }

                else{
                    $soundcloud = Input::get('soundcloud');
                }

                $details = Shop::where('id',$id)->first();

               // dd($details);


                $details -> title = trim(Input::get('title'));
                $details -> banner  = $banner;
                $details -> spiricoco = $spritcoco;
                $details -> itunes = $itunes;
                $details -> soundcloud =$soundcloud;
                $details -> save();

                //dd($note);



                
                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was updated succesfully")->with('note',$note)->with('type','success');
            }




        }



        public function addNewRelease()
        {
            return View::make('admin.addNewRelease');
        }


        public function addNewReleaseProcess()
        {
            
            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {
                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png','jpeg');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return Redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }

            if(empty(Input::file('image'))){


                $note[] = "No banner uploaded, default would be used";

            }


            $rules = array(
                'title'=>'required',
                'text'=>'required'
            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){


                return Redirect::to('admin/add/newrelease')->withErrors($validator);
            }else{

                //if(empty(Input::get('spiritcoco')))

                if(empty(Input::get('spiritcoco')))
                {
                    $spritcoco = '#';
                    $note[] = "No link uploaded for Spiritcoco";
                }

                else
                {
                    $spritcoco = trim(Input::get('spiritcoco'));
                }



                if(empty(Input::get('free_download')))
                {
                    $free = '#';
                    $note[] = "No link uploaded for free download";
                }

                else
                {
                    $free = trim(Input::get('free_download'));
                }


                if(empty(Input::get('itunes')))
                {
                    $itunes = '#';
                    $note[] = "No link uploaded for itunes";
                }

                else
                {
                    $itunes = Input::get('itunes');
                }

                if(empty(Input::get('soundcloud'))){
                    $soundcloud = '#';
                    $note[] = "No link uploaded for soundcloud";
                }

                else{
                    $soundcloud = Input::get('soundcloud');
                }

                $details = new Newrelease();
                $details -> title = trim(Input::get('title'));
                $details -> text = trim(Input::get('text'));
                $details -> banner  = $banner;
                $details -> spiricoco = $spritcoco;
                $details -> itunes = $itunes;
                $details -> free_download = $free;
                $details -> soundcloud = $soundcloud;
                $details -> unique_id = md5(time()."title");
                $details -> save();

                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was uploaded succesfully")->with('note',$note)->with('type','success');
            }



        }


        public function viewNewRelease()
        {
            $details['details'] = Newrelease::orderBy('id', 'desc')->get();

            return View::make('admin.viewNewRelease',$details);
        }

        public function editNewRelease($unique_id)
        {
            //echo $id;exit;
            $details['details'] = Newrelease::where('unique_id','=',$unique_id)->first();
            //dd($details);

            return View::make('admin.editNewRelease',$details);
        }

        public function editNewReleaseProcess($unique_id)
        {
            //echo ($unique_id);exit;
            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {

                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png','jpeg');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return Redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }


            if(empty(Input::file('image'))){
                $banner = Input::get('banner');
                $note[] = "No banner uploaded, default would be used";

            }




            $rules = array(
                'title'=>'required',
                'text'=>'required'
            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator);
            }else{

                //if(empty(Input::get('spiritcoco')))

                if(empty(Input::get('spiritcoco')))
                {
                    $spritcoco = '#';
                    $note[] = "No link uploaded for Spiritcoco";
                }

                else
                {
                    $spritcoco = trim(Input::get('spiritcoco'));
                }

                if(empty(Input::get('itunes')))
                {
                    $itunes = '#';
                    $note[] = "No link uploaded for itunes";
                }

                else
                {
                    $itunes = Input::get('itunes');
                }

                if(empty(Input::get('soundcloud'))){
                    $soundcloud = '#';
                    $note[] = "No link uploaded for soundcloud";
                }

                else{
                    $soundcloud = Input::get('soundcloud');
                }

                if(empty(Input::get('free_download'))){
                    $freedownload = '#';
                    $note[] = "No link uploaded for free download";
                }

                else{
                    $freedownload = Input::get('free_download');
                }

                $details = Newrelease::where('unique_id',$unique_id)->first();

                // dd($details);


                $details -> title = trim(Input::get('title'));
                $details -> text = trim(Input::get('text'));
                $details -> banner  = $banner;
                $details -> spiricoco = $spritcoco;
                $details -> itunes = $itunes;
                $details -> soundcloud =$soundcloud;
                $details -> free_download =$freedownload;
                $details -> save();





                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was updated succesfully")->with('note',$note)->with('type','success');
            }




        }


        public function editAbout()
        {

            $details['details'] = About::first();

           // dd($details);
            return View::make('admin.editAbout',$details);
        }
        public function editAboutProcess()
        {
            //echo ($unique_id);exit;
            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {

                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }


            if(empty(Input::file('image'))){
                $banner = Input::get('banner');
                $note[] = "No banner uploaded, default would be used";

            }




            $rules = array(
                'text'=>'required'
            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator);
            }else{



                $details = About::where('id',1)->first();

                    $ab = str_replace('font','fn',Input::get('text'));
                    $dat = str_replace('color','cl',$ab);
                $details -> text = trim($dat);
                $details -> banner  = $banner;
                $details -> save();

                

                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was updated succesfully")->with('note',$note)->with('type','success');
            }




        }

        public function editHomeAbout()
        {
            $details['details'] = Home::where('id',1)->first();
           return View::make('admin.editHomeAbout',$details);
        } 
        
        


        public function editHomeAboutProcess(){
            $rules = array(
                'title'=>'required',
                'text'=>'required'
            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator);
            }else{



                $details = Home::where('id',1)->first();
                $details -> title = Input::get('title');
                $details -> com1 = Input::get('text');

                $details -> save();



                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was updated succesfully")->with('type','success');
            }
        }


        public function core_values()
        {
            $details['details'] = Home::where('id',2)->first();
            return View::make('admin.editPassionMission',$details);
        }


        public function core_valuesProcess(){
            $rules = array(
                'passion'=>'required',
                'passion_text'=>'required',
                'mission'=>'required',
                'mission_text'=>'required',
                'vision'=>'required',
                'vision_text'=>'required'
            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator);
            }else{



                $details = Home::where('id',2)->first();
                //$details -> title = Input::get('title');
                $details -> com3 = Input::get('mission');
                $details -> com4 = Input::get('mission_text');
                $details -> title = Input::get('passion');
                $details -> com2 = Input::get('passion_text');
                $details -> com5 = Input::get('vision');
                $details -> com6 = Input::get('vision_text');


                $details -> save();



                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was updated succesfully")->with('type','success');
            }
        }


        public function addAlbum()
        {
            return View::make('admin.addAlbum');
        }

        public function addAlbumProcess()
        {
            //echo ($unique_id);exit;
            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {

                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }


            if(empty(Input::file('image'))){
                $banner = Input::get('banner');
                $note[] = "No banner uploaded, default would be used";

            }




            $rules = array(
                'link'=>'required',
                'title'=>'required'
            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator)->withInput();
            }else{



                $details = new Album();

                $details -> title = trim(Input::get('title'));
                $details -> link = trim(Input::get('link'));
                $details -> banner  = $banner;
                $details -> save();



                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Album Was added succesfully")->with('note',$note)->with('type','success');
            }




        }


        public function viewAlbum()
        {
            //echo $id;exit;
            $details['details'] = Album::all();
            //dd($details);

            return View::make('admin.viewAlbum',$details);
        }

        public function editAlbum($id)
        {
            //echo $id;exit;
            $details['details'] = Album::where('id',$id)->first();
            //dd($details);

            return View::make('admin.editAlbum',$details);
        }



        public function editAlbumProcess($id)
        {

            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {



                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }


            if(empty(Input::file('image'))){
                $banner = Input::get('banner');
                $note[] = "No banner uploaded, default would be used";

            }




            $rules = array(
                'title'=>'required',
                'link'=>'required'
            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator);
            }else{

                //if(empty(Input::get('spiritcoco')))

                if(empty(Input::get('link')))
                {
                    $link = '#';
                    $note[] = "No link uploaded for Spiritcoco";
                }

                else
                {
                    $link = trim(Input::get('link'));
                }
                

                $details = Album::where('id',$id)->first();

                //dd($details);


                $details -> title = trim(Input::get('title'));
                $details -> banner  = $banner;
                $details -> link = $link;


                $details ->save();
               // echo $banner;exit;

                //dd($note);




                return Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was updated succesfully")->with('note',$note)->with('type','success');
            }




        }


        public function addEvent()
        {
          return View::make('admin.addEvent');  
        }


        public function addImage()
        {
            return View::make('admin.addGallery');
        }

        public function addEventProcess()
        {

            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {



                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }


            if(empty(Input::file('image'))){
                $banner = "";
                $note[] = "No banner uploaded, default would be used";

            }




            $rules = array(
                'title'=>'required',
                'time'=>'required',


            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator);
            }else{

                //if(empty(Input::get('spiritcoco')))


                $detail = new Eventi();

                //($detail);
                $detail -> event_time = strtotime(Input::get('time'));
                $detail -> address  = trim(Input::get('address'));
                $detail -> state = 1;
                $detail -> status = trim(Input::get('status'));
                $detail -> title  = trim(Input::get('title'));
                $detail -> unique_id  = md5(time().trim(Input::get('title')));
                $detail -> banner  = $banner;

                $detail-> save();
                // echo $banner;exit;

                //dd($note);




                return \Illuminate\Support\Facades\Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was created succesfully")->with('note',$note)->with('type','success');
            }




        }



        public function addImageProcess()
        {

            $banner = "";
            $note = array();


            $rules = array(
                'image'=>'required',

            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return Redirect::back()->withErrors($validator);
            }else{

                //if(empty(Input::get('spiritcoco')))

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png','jpeg');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return \Illuminate\Support\Facades\Redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }


                $detail = new Image();

                //($detail);

                $detail -> path  = $banner;

                $detail-> save();
                // echo $banner;exit;

                //dd($note);




                return \Illuminate\Support\Facades\Redirect::back()->with('message',"Image Was created succesfully")->with('note',$note)->with('type','success');
            }




        }

        public function viewEvent()
        {
            //echo $id;exit;
            $details['details'] = Eventi::orderBy('id','desc')->get();
            //dd($details);


            return View::make('admin.viewEvent',$details);
        }

        public function viewAttendees($unique_id)
        {
            $data['details'] = Attendees::where('event_id',$unique_id)->get();

            //dd($data);

            return View::make('admin.viewAttendees',$data);
        }


        public function editEvent($unique_id)
        {
            //echo $id;exit;
            
            $details['details'] = Eventi::where('unique_id',$unique_id)->first();
            //dd($details);

            return View::make('admin.editEvent',$details);
        }



        public function editEventProcess($unique_id)
        {
            //echo ($unique_id);exit;
            $banner = "";
            $note = array();
            if(Input::hasFile('image'))
            {

                //check if the uploaded file is valid

                if(Input::file('image')->isValid()){
                    //     echo "file is valid";exit;
                    $allowed_extensions = array('jpg','png');

                    $file = Input::file('image');
                    $extension  = $file->getClientOriginalExtension();
                    $destinationPath ='images';
                    if(!in_array($extension,$allowed_extensions)){

                        return \Illuminate\Support\Facades\Redirect::back()->with('message','Error in extension')->with('type','error');
                    }else{
                        $filename = md5(time().$file->getClientOriginalName());
                        $upload_success = $file->move($destinationPath,$filename.".".$extension);

                        if( $upload_success ) {
                            $banner = 'images/'.$filename.".".$extension;
                        }else{
                            $note[] = "No banner uploaded, default would be used";
                        }
                    }


                }

            }


            if(empty(Input::file('image'))){
                $banner = Input::get('banner');
                $note[] = "No banner uploaded, previous would be used";

            }




            $rules = array(
                'title'=>'required',
                'time'=>'required'
            );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                return \Illuminate\Support\Facades\Redirect::back()->withErrors($validator);
            }else{

                //if(empty(Input::get('spiritcoco')))


                $details = Eventi::where('unique_id',$unique_id)->first();

                // dd($details);


                $details -> title = trim(Input::get('title'));
                $details -> banner  = $banner;
                $details -> address = trim(Input::get('address'));
                $details -> event_time = strtotime(Input::get('time'));
               // $details -> status = trim(Input::get('status'));
                if(isset($_POST['status'])){
                    $details -> status  = trim(Input::get('status'));
                }

                if(Input::get('state') == 0){
                    $details -> state  = trim(Input::get('state'));
                }
                $details -> form = trim(Input::get('form'));
                $details -> save();




                return \Illuminate\Support\Facades\Redirect::back()->with('message',"<strong>".Input::get('title')."</strong> Was updated succesfully")->with('note',$note)->with('type','success');
            }




        }

        public function viewFeedback()
        {

            $data['details'] = Feedback::all();
            return View::make('admin.viewFeedBack',$data);
        }


        public function viewTestimony()
        {
            $data['details'] = Testify::all();
            return View::make('admin.viewTestimony',$data);
        }



        public function viewBookings()
        {
            $data['details'] = Bookings::all();
            return View::make('admin.viewbookings',$data);
        }


    }
?>