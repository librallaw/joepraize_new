<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/






Route::get('/', 'HomeController@home');

Route::get('live', 'LiveController@showLive');

Route::post('live', 'LiveController@addcomments');

Route::get('getcomments', 'LiveController@getcomments');

/*Route::get('/', function(){
    return Redirect::route('maintenance');
});*/


Route::get('/newreleases', 'HomeController@newReleases_single')->name('newReleases_single');
Route::get('/newreleases/{id}/{slug}', 'HomeController@newReleases')->name('newReleases');

Route::get('/jesus-everywhere', 'HomeController@newReleaseSingle')->name('jesus-everywhere');

Route::get('/Holy_Ghost', 'HomeController@Holy_Ghost')->name('Holy_Ghost');

Route::get('/everywhere-is-blessed', 'HomeController@blessed')->name('blessed');
Route::get('/you-alone', 'HomeController@you_alone')->name('you_alone');

Route::get('/shop', 'HomeController@shop')->name('shop');
Route::get('/feedback', 'HomeController@feedback')->name('feedback');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/freedownload','HomeController@freedownload')->name('freedownload');
Route::get('/bookings', 'HomeController@bookings')->name('bookings');
Route::get('/testify', 'HomeController@testify')->name('testify');

Route::get('/ticket', 'HomeController@ticket')->name('ticket');


Route::get('/ticketi', 'HomeController@ticketi')->name('ticketi');

Route::get('/pdd', 'HomeController@pdd')->name('pdd');
Route::get('/psd', 'HomeController@psd')->name('psd');
Route::get('/psd1', 'HomeController@psd1')->name('psd1');


Route::get('/maintenance', 'HomeController@maintenance')->name('maintenance');


Route::get("save/ticket",'HomeController@saveTicket')->name('saveTicket');
Route::get("save/ticket/{file}",'SongsController@ticketDownload')->name('ticketDownload');





Route::get('/feedback', 'HomeController@feedback')->name('feedback');
Route::get('/events', 'HomeController@events')->name('events');
Route::get('/event/{unique_id}', 'HomeController@eventsInfo')->name('eventsInfo');


//form process
Route::post('/feedback', 'HomeController@feedback_process');
Route::post('/bookings', 'HomeController@bookings_process');
Route::post('/testify', 'HomeController@testify_process');
Route::post('/event/register', 'HomeController@event_process')->name('event_process');



//Download File
Route::get('/download/{unique_id}','SongsController@getDownload');


//Admin Routes
Route::group(array('prefix'=>'admin'),function (){
    Route::get('/',function (){
        return \Illuminate\Support\Facades\Redirect::to('admin/view/shop');
    });

    Route::get('logout', 'AuthController@doLogout');



    Route::get('login','AdminController@login')->name('login');
    Route::get('shop','AdminController@shop')->name('addShop');
    Route::get('view/shop','AdminController@viewShop')->name('viewShop');
    Route::get("edit/shop/{id}",'AdminController@editShop')->name('editShop');

    Route::get("add/album",'AdminController@addAlbum')->name('addAlbum');

    Route::get("add/newrelease",'AdminController@addNewRelease')->name('addNewRelease');
    Route::get("view/newrelease",'AdminController@viewNewRelease')->name('viewNewRelease');
    Route::get("edit/newRelease/{unique_id}",'AdminController@editNewRelease')->name('editNewRelease');

    Route::get('edit/about','AdminController@editAbout')->name('editAbout');

    Route::get('edit/home/about','AdminController@editHomeAbout')->name('editHomeAbout');

    Route::get('edit/core_values','AdminController@core_values')->name('core_values');

    Route::get('view/album','AdminController@viewAlbum')->name('viewAlbum');
    Route::get("edit/album/{id}",'AdminController@editAlbum')->name('editAlbum');







    Route::get("add/event",'AdminController@addEvent')->name('addEvent');
    Route::get("view/event",'AdminController@viewEvent')->name('viewEvent');
    Route::get("edit/event/{unique_id}",'AdminController@editEvent')->name('editEvent');
    Route::get("view/attendance/{unique_id}",'AdminController@viewAttendees')->name('viewAttendees');




    Route::get("view/feedback",'AdminController@viewFeedBack')->name('viewFeedBack');
    Route::get("view/testimony",'AdminController@viewTestimony')->name('viewTestimony');
    Route::get("view/bookings",'AdminController@viewBookings')->name('viewBookings');





});





//admin processing routes
Route::group(array('prefix'=>'admin'),function (){
    Route::post('login','AuthController@doLogin')->name('doLogin');

    Route::post('shop','AdminController@adminShopProcess')->name('adminShopprocess');
    Route::post("edit/shop/{id}",'AdminController@editShopProcess')->name('editShopProcess');

    Route::post("new/release",'AdminController@addNewReleaseProcess')->name('addNewReleaseProcess');


    Route::post("edit/newRelease/{unique_id}",'AdminController@editNewReleaseProcess')->name('editNewReleaseProcess');

    Route::post('edit/about','AdminController@editAboutProcess')->name('editAboutProcess');


    Route::post('edit/home/about','AdminController@editHomeAboutProcess')->name('editHomeAboutProcess');

    Route::post('edit/core_values','AdminController@core_valuesProcess')->name('core_valuesProcess');

    Route::post('add/album','AdminController@addAlbumProcess')->name('addAlbumProcess');

    Route::post("edit/album/{id}",'AdminController@editAlbumProcess')->name('editAlbumProcess');

    Route::post("add/event",'AdminController@addEventProcess')->name('addEventProcess');

    Route::post("edit/event/{unique_id}",'AdminController@editEventProcess')->name('editEventProcess');


    Route::get("add/image",'AdminController@addImage')->name('addImage');
    Route::post("add/image",'AdminController@addImageProcess')->name('addImageProcess');


});




