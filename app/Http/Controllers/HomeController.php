<?php

namespace App\Http\Controllers;

use App\About;
use App\Album;
use App\Eventi;
use App\Feedback;
use App\Home;
use App\Image;
use App\Newrelease;
use App\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Validator;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


	public function wrongurl(){
		return view('404');
	}


	public function live(){
		return view('live');
	}
	
	
	


	public function showWelcome()
	{
		return view('hello');
	}

	public function home()
	{

		$details['event'] = Eventi::orderBy('id','desc')->first();
		$details['new_release'] = Newrelease::orderBy('id','desc')->get();
		$details['albums'] = Album::orderBy('id','desc')->get();
		$details['details'] = Home::all();
		$details['images'] = Image::orderBy('id','desc')->get();
		return view('home2',$details);
	}

	public function newReleases_single()
	{

			$details['details'] = Newrelease::orderBy('id', 'desc')->first();
			$details['others'] = Newrelease::take(6)->skip(1)->orderBy('id', 'desc')->get();
		

		return view('newreleases',$details);
	}

	public function newReleases($id,$slug)
	{
		
			//echo " I am not mama";exit;
			$details['details'] = Newrelease::where('id','=',$id)->orderBy('id', 'desc')->first();
			$details['others'] = Newrelease::where('id','!=',$id)->orderBy('id', 'desc')->get();
		

		return view('newreleases',$details);
	}
	
	
	
	

	public function shop()
	{
		$details['details'] = Newrelease::orderBy('id', 'desc')->get();
		//dd($details);
		return view('albumshop',$details);
	}

	public function feedback()
	{
		return view('feedback');
	}

	public function about()
	{

	  //  echo base64_decode("cmFuZ2VyczAx");exit;
		$details['details'] = About::first();

		return view('about2',$details);
	}

	public function freedownload()
	{
		$data['songs'] = Song::orderBy('id', 'desc')->get();
		//dd($data['songs'][0]->id);
		return view('freedownload',$data);
	}

	public function bookings()
	{
		return view('bookings');
	}
	
	public function testify()
	{
		return view('testify');
	}

	


	public function pdd()
	{
		return view('pdf');
	}

	
	
	
	
	
	
	
	
	public function psd()
	{
		return view('test');
	}

	public function psd1()
	{
		return view('pdfdownload');
	}

	public function maintenance()
	{
		return view('maintenance');
	}
	

	
	public function ticket()
	{
		return view('ticketdownload');
	}

	public function ticketi()
	{
		return view('ticket');
	}

	public function saveTicket()
	{
		return view('pdf');
	}

	public function saveTicketProcess()
	{
		//just a random name for the image file
		$random = rand(100, 1000);

//$_POST[data][1] has the base64 encrypted binary codes.
//convert the binary to image using file_put_contents
		$savefile = @file_put_contents("output/$random.jpg", base64_decode(explode(",", $_POST['data'])[1]));

//if the file saved properly, print the file name
		if($savefile){
			echo $random;
		}
	}


	public function events()
	{
		$details['details'] = Eventi::orderBy('id','desc')->get();

		return view('event',$details);
	}


	public function eventsInfo($unique_id)
	{
		$details['expectations'] = Eventi::where('unique_id',$unique_id)->first()->attendees;
		$details['details'] = Eventi::where('unique_id',$unique_id)->first();

		//$details['expectations'] = Eventi::where('attendees',$unique_id)->first();
		return view('eventSingle',$details);
	}


	//process feedback form
	public function feedback_process(Request $request)
	{
		Input::merge(array_map('trim', Input::all()));
		
		//echo Input::get('email');exit;
		$validator = Validator::make(
			array(
				'name' => Input::get('name'),
				'email' => Input::get('email'),
				'country' => Input::get('country'),
				'message' => Input::get('message')
			),
			array(
				'name' => 'required',
				'email' => 'required',
				'country' => 'required',
				'message' => 'required'
			)
		);

		if($validator -> fails()){

		//	echo "failed";exit;
			$messages = $validator->messages();




		//return Redirect::to('feedback')->with('message',$messages);
			return Redirect::to('feedback')
				->withErrors($validator)
				->withInput(Input::except('password', 'password_confirm'));
		}else{
			$message = new Feedback();
			$message -> name = $request->name;
			$message -> email = $request->email;
			$message -> country =$request->country;
			$message -> phone = $request->phone;
			$message -> message = $request->message;
			$message -> save();



			$user = array(
				'email'=>$request->email,
				'name'=> $request->name,
				'country'=>$request->country,
				'phone'=> $request->phone,
				'message'=> $request->message,
				'admin'=> 'joepraizemusic@yahoo.com',
				//'admin'=> 'librallaw@yahoo.com',
				'adminemail'=> 'librallaw@yahoo.com'
			);

// the data that will be passed into the mail view blade template
			$data = array(

				'detail'	=> $user['message'],
				'phone'	=> $user['phone'],
				'email'	=> $user['email'],
				'country'	=> $user['country'],
				'name'	=> $user['name']
		);

// use Mail::send function to send email passing the data and using the $user variable in the closure
			Mail::send('emails.test', $data, function($message) use ($user)
			{
				$message->from('feedback@joepraize.com', 'JP Feedback Notifcation Service');
				$message->to($user['admin'], 'Joe Praize')->subject(' New feed back from joepraize.com website');
			});




			return Redirect::back()->with('message','Thanks for your feedback');
		}
	 }


	public function bookings_process()
	{

		$validator = Validator::make(
			array(
				'name' => Input::get('name'),
				'email' => Input::get('email'),
				'country' => Input::get('country'),
				'phone' => Input::get('phone'),
				'organisation' => Input::get('organisation'),
				'booking_date' => Input::get('booking_date'),
				'venue' => Input::get('venue'),
				'information' => Input::get('information'),

			),array(
				'name' => 'required',
				'email' =>'required',
				'country' => 'required',
				'phone' => 'required',
				'organisation' => 'required',
				'booking_date' => 'required',
				'venue' => 'required',
				'information' => 'required',
			)
		);

		if($validator -> fails()){
			return Redirect::to('bookings')
				->withErrors($validator)
				->withInput(Input::except('password', 'password_confirm'));
		}else{
			$data = new Bookings();
			$data -> name = Input::get('name');
			$data -> email = Input::get('email');
			$data -> country = Input::get('country');
			$data -> organisation = Input::get('organisation');
			$data -> booking_date = Input::get('booking_date');
			$data -> venue = Input::get('venue');
			$data -> information = Input::get('information');
			$data -> save();





			$user = array(

				//'admin'=> 'librallaw@yahoo.com',
				'admin'=> 'joepraizemusic@yahoo.com',
				'adminemail'=> 'librallaw@yahoo.com'
			);

// the data that will be passed into the mail view blade template
			$data = array(

				'email'=>Input::get('email'),
				'name'=> Input::get('name'),
				'country'=> Input::get('country'),
				'phone'=> Input::get('phone'),
				'organisation'=> Input::get('organisation'),
				'date'=> Input::get('booking_date'),
				'venue'=> Input::get('venue'),
				'information'=> Input::get('information'),
			);

// use Mail::send function to send email passing the data and using the $user variable in the closure
			Mail::send('emails.bookings', $data, function($message) use ($user)
			{
				$message->from('feedback@joepraize.com', 'JP Booking Notifcation Service');
				$message->to($user['admin'], 'Joe Praize')->subject(' New booking  from joepraize.com website');
			});



			return Redirect::back()->with('message','You booking request has been received, You will be contacted after processing. Thank You');
		}
	}


	public function testify_process()
	{

		$validator = Validator::make(
			array(
				'first_name' => trim(Input::get('first_name')),
				'last_name' => trim(Input::get('last_name')),
				'email' => trim(Input::get('email')),
				'country' => trim(Input::get('country')),
				'phone' => trim(Input::get('phone')),
				'testimony' => trim(Input::get('message')),


			),array(
				'first_name' => 'required',
				'last_name' => 'required',
				'testimony' => 'required',

			)
		);

		if($validator -> fails()){
			return Redirect::to('testify')
				->withErrors($validator)
				->withInput(Input::except('password', 'password_confirm'));
		}else{
			$data = new Testify();
			$data -> first_name = ucfirst(strtolower(Input::get('first_name')));
			$data -> last_name = ucfirst(strtolower(Input::get('last_name')));
			$data -> email = ucfirst(strtolower(Input::get('email')));
			$data -> country = Input::get('country');
			$data -> phone = Input::get('phone');
			$data -> message = ucfirst(strtolower(Input::get('message')));

			$data -> save();







			$user = array(

				'admin'=> 'joepraizemusic@yahoo.com',
				//'admin'=> 'librallaw@yahoo.com',
				'adminemail'=> 'librallaw@yahoo.com'
			);

// the data that will be passed into the mail view blade template
			$data = array(

				'email'=>Input::get('email'),
				'first_name'=> Input::get('first_name'),
				'last_name'=> Input::get('last_name'),
				'country'=> Input::get('country'),
				'phone'=> Input::get('phone'),
				'detail'=> Input::get('message'),
			);

// use Mail::send function to send email passing the data and using the $user variable in the closure
			Mail::send('emails.testify', $data, function($message) use ($user)
			{
				$message->from('feedback@joepraize.com', 'JP Testimony Notifcation Service');
				$message->to($user['admin'], 'Joe Praize')->subject(' New Testimony from joepraize.com website');
			});


			return Redirect::back()->with('message','Your testimony has been received, Thank You for sharing with the rest of the world');
		}
	}


	public function event_process()
	{

		
		$validator = Validator::make(
			array(
				'first_name' => trim(Input::get('first_name')),
				'last_name' => trim(Input::get('last_name')),
				'email' => trim(Input::get('email')),
				'country' => trim(Input::get('country')),
				'phone' => trim(Input::get('phone')),
				'testimony' => trim(Input::get('expectation')),


			),array(
				'first_name' => 'required',
				'last_name' => 'required',
				'email' => 'required',

			)
		);

		if($validator -> fails()){
			return Redirect::back()
				->withErrors($validator)
				->withInput(Input::except('password', 'password_confirm'));
		}else{
			$data = new Attendees();
			$data -> first_name = ucfirst(strtolower(Input::get('first_name')));
			$data -> last_name = ucfirst(strtolower(Input::get('last_name')));
			$data -> email = strtolower(Input::get('email'));
			$data -> country = Input::get('country');
			$data -> phone = Input::get('phone');
			if(empty(Input::get('unique_id'))){
				$data -> event_id ='#';
			}else{
				$data -> event_id = Input::get('unique_id');
			}


			if(empty(Input::get('expectation'))){
				$data -> expectation ='#';
			}else{
				$data -> expectation = Input::get('expectation');
			}

		//	$data -> expectation = ucfirst(strtolower(Input::get('expectation')));

			$data -> save();

			$event_details = Eventi::where('unique_id',Input::get('unique_id'))->first();


			$fir = Input::get('first_name');
			$las = Input::get('last_name');

			$dana = Input::all();
			$dana['event_name'] = $event_details['title'];
			
			
			$dana['event_time'] = date('l, F jS, Y',$event_details['event_time']);
			$dana['address'] = $event_details['address'];

			return Redirect::to("/event/ticket.php?jsjsisueu9rw0w9e8rdhssrr8e8e={$fir}&dwerthrfwferhrwfehregrgegeg={$las}");
		}
	}


	public function newReleaseSingle()
	{
		$details['others'] = Newrelease::orderBy('id', 'desc')->get();
		return view('newrelease_single',$details);
	}

	public function blessed()
	{
		$details['others'] = Newrelease::orderBy('id', 'desc')->get();
		return view('newrelease_blessed',$details);
	}

	public function you_alone()
	{
		$details['others'] = Newrelease::orderBy('id', 'desc')->get();
		return view('newrelease_you_alone',$details);
	}

	public function Holy_Ghost()
	{
		$details['others'] = Newrelease::orderBy('id', 'desc')->get();
		return view('HolyGhost',$details);
	}
}
