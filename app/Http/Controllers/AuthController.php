<?php

    class AuthController extends BaseController{

        public function doLogin ()
        {

            $rules =  array(
                'email'=>'required',
                'password'=>'required',
                );

            $validator = Validator::make(Input::all(),$rules);

            if($validator -> fails()){

                Redirect::back()->with('message','All form fields are required')->withErrors($validator)->with('type','errors');
            }else{
                $userdata = array(
                    'email'=>Input::get('email'),
                    'password'=>Input::get('password')
                );

                if(Auth::attempt($userdata)){

                   return Redirect::intended('admin/view/event');
                }else{
                   return Redirect::back()->with('message','Wrong Email OR Password')->with('type','errors');
                }
            }
        }




        public function doLogout()
        {
            Auth::logout(); // log the user out of our application
            return Redirect::to('/admin/login'); // redirect the user to the login screen
        }
    }
?>