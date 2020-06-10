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






Route::get('/', array('uses'=>'HomeController@home',));

Route::get('live', array('uses' => 'LiveController@showLive'));

Route::post('live', array('uses' => 'LiveController@addcomments'));

Route::get('getcomments', array('uses' => 'LiveController@getcomments'));

/*Route::get('/', function(){
    return Redirect::route('maintenance');
});*/


Route::get('/newreleases', array('uses'=>'HomeController@newReleases_single', 'as'=>'newReleases_single'));
Route::get('/newreleases/{id}/{slug}', array('uses'=>'HomeController@newReleases', 'as'=>'newReleases'));

Route::get('/jesus-everywhere', array('uses'=>'HomeController@newReleaseSingle', 'as'=>'jesus-everywhere'));

Route::get('/Holy_Ghost', array('uses'=>'HomeController@Holy_Ghost', 'as'=>'Holy_Ghost'));

Route::get('/everywhere-is-blessed', array('uses'=>'HomeController@blessed', 'as'=>'blessed'));
Route::get('/you-alone', array('uses'=>'HomeController@you_alone', 'as'=>'you_alone'));

Route::get('/shop', array('uses'=>'HomeController@shop', 'as'=>'shop'));
Route::get('/feedback', array('uses'=>'HomeController@feedback', 'as'=>'feedback'));
Route::get('/about', array('uses'=>'HomeController@about', 'as'=>'about'));
Route::get('/freedownload', array('uses'=>'HomeController@freedownload', 'as'=>'freedownload'));
Route::get('/bookings', array('uses'=>'HomeController@bookings', 'as'=>'bookings'));
Route::get('/testify', array('uses'=>'HomeController@testify', 'as'=>'testify'));

Route::get('/ticket', array('uses'=>'HomeController@ticket', 'as'=>'ticket'));


Route::get('/ticketi', array('uses'=>'HomeController@ticketi', 'as'=>'ticketi'));

Route::get('/pdd', array('uses'=>'HomeController@pdd', 'as'=>'pdd'));
Route::get('/psd', array('uses'=>'HomeController@psd', 'as'=>'psd'));
Route::get('/psd1', array('uses'=>'HomeController@psd1', 'as'=>'psd1'));


Route::get('/maintenance', array('uses'=>'HomeController@maintenance', 'as'=>'maintenance'));


Route::get("save/ticket",array('uses'=>'HomeController@saveTicket','as'=>'saveTicket'));
Route::get("save/ticket/{file}",array('uses'=>'SongsController@ticketDownload','as'=>'ticketDownload'));





Route::get('/feedback', array('uses'=>'HomeController@feedback', 'as'=>'feedback'));
Route::get('/events', array('uses'=>'HomeController@events', 'as'=>'events')/*array('uses'=>'HomeController@events', 'as'=>'events')*/);
Route::get('/event/{unique_id}', array('uses'=>'HomeController@eventsInfo', 'as'=>'eventsInfo'));


//form process
Route::post('/feedback', array('uses'=>'HomeController@feedback_process'));
Route::post('/bookings', array('uses'=>'HomeController@bookings_process'));
Route::post('/testify', array('uses'=>'HomeController@testify_process'));
Route::post('/event/register', array('uses'=>'HomeController@event_process', 'as'=>'event_process'));



//Download File
Route::get('/download/{unique_id}',array('uses'=>'SongsController@getDownload'));


//Admin Routes
Route::group(array('prefix'=>'admin'),function (){
    Route::get('/',function (){
        return Redirect::to('admin/view/shop');
    });

    Route::get('logout', array('uses' => 'AuthController@doLogout'));



    Route::get('login',array('uses'=>'AdminController@login','as'=>'login'));
    Route::get('shop',array('before'=>'guest','uses'=>'AdminController@shop','as'=>'addShop'));
    Route::get('view/shop',array('before'=>'guest','uses'=>'AdminController@viewShop','as'=>'viewShop'));
    Route::get("edit/shop/{id}",array('uses'=>'AdminController@editShop','as'=>'editShop'));

    Route::get("add/album",array('before'=>'guest','uses'=>'AdminController@addAlbum','as'=>'addAlbum'));

    Route::get("add/newrelease",array('before'=>'guest','uses'=>'AdminController@addNewRelease','as'=>'addNewRelease'));
    Route::get("view/newrelease",array('before'=>'guest','uses'=>'AdminController@viewNewRelease','as'=>'viewNewRelease'));
    Route::get("edit/newRelease/{unique_id}",array('before'=>'guest','uses'=>'AdminController@editNewRelease','as'=>'editNewRelease'));

    Route::get('edit/about',array('before'=>'guest','uses'=>'AdminController@editAbout','as'=>'editAbout'));

    Route::get('edit/home/about',array('before'=>'guest','uses'=>'AdminController@editHomeAbout','as'=>'editHomeAbout'));

    Route::get('edit/core_values',array('before'=>'guest','uses'=>'AdminController@core_values','as'=>'core_values'));

    Route::get('view/album',array('before'=>'guest','uses'=>'AdminController@viewAlbum','as'=>'viewAlbum'));
    Route::get("edit/album/{id}",array('before'=>'guest','uses'=>'AdminController@editAlbum','as'=>'editAlbum'));







    Route::get("add/event",array('before'=>'guest','uses'=>'AdminController@addEvent','as'=>'addEvent'));
    Route::get("view/event",array('before'=>'guest','uses'=>'AdminController@viewEvent','as'=>'viewEvent'));
    Route::get("edit/event/{unique_id}",array('before'=>'guest','uses'=>'AdminController@editEvent','as'=>'editEvent'));
    Route::get("view/attendance/{unique_id}",array('before'=>'guest','uses'=>'AdminController@viewAttendees','as'=>'viewAttendees'));




    Route::get("view/feedback",array('uses'=>'AdminController@viewFeedBack','as'=>'viewFeedBack'));
    Route::get("view/testimony",array('uses'=>'AdminController@viewTestimony','as'=>'viewTestimony'));
    Route::get("view/bookings",array('uses'=>'AdminController@viewBookings','as'=>'viewBookings'));





});





//admin processing routes
Route::group(array('prefix'=>'admin'),function (){
    Route::post('login',array('uses'=>'AuthController@doLogin','as'=>'doLogin'));

    Route::post('shop',array('uses'=>'AdminController@adminShopProcess','as'=>'adminShopprocess'));
    Route::post("edit/shop/{id}",array('uses'=>'AdminController@editShopProcess','as'=>'editShopProcess'));

    Route::post("new/release",array('uses'=>'AdminController@addNewReleaseProcess','as'=>'addNewReleaseProcess'));


    Route::post("edit/newRelease/{unique_id}",array('uses'=>'AdminController@editNewReleaseProcess','as'=>'editNewReleaseProcess'));

    Route::post('edit/about',array('uses'=>'AdminController@editAboutProcess','as'=>'editAboutProcess'));


    Route::post('edit/home/about',array('uses'=>'AdminController@editHomeAboutProcess','as'=>'editHomeAboutProcess'));

    Route::post('edit/core_values',array('uses'=>'AdminController@core_valuesProcess','as'=>'core_valuesProcess'));

    Route::post('add/album',array('uses'=>'AdminController@addAlbumProcess','as'=>'addAlbumProcess'));

    Route::post("edit/album/{id}",array('uses'=>'AdminController@editAlbumProcess','as'=>'editAlbumProcess'));

    Route::post("add/event",array('uses'=>'AdminController@addEventProcess','as'=>'addEventProcess'));

    Route::post("edit/event/{unique_id}",array('uses'=>'AdminController@editEventProcess','as'=>'editEventProcess'));


    Route::get("add/image",array('before'=>'guest','uses'=>'AdminController@addImage','as'=>'addImage'));
    Route::post("add/image",array('before'=>'guest','uses'=>'AdminController@addImageProcess','as'=>'addImageProcess'));


});




