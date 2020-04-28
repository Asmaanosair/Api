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

Route::group(["middleware"=>['auth']],function (){
    /******************************************************
     * ***************** Admin Panel***************************
     *****************************************************/
    Route::get('/kt_admin/dashboard','dashboardcontroller@index' );

/***********************************************************
 * ***************** Service  ******************************
 ************************************************************/
Route::get('/kt_admin/serve','servicecontroller@index');
Route::get('/kt_admin/e_serve/{id}','servicecontroller@edit');
Route::get('/kt_admin/c_serve','servicecontroller@create');
Route::post('/kt_admin/up_serve/{id}','servicecontroller@update');
Route::get('/kt_admin/del_serve/{id}','servicecontroller@delete');
Route::post('/kt_admin/add_serve','servicecontroller@add');

/***********************************************************
 ****************** End Service ***************************
 ***********************************************************/


    /***********************************************************
     * ***************** product  ******************************
     ************************************************************/
    Route::get('/kt_admin/product','productcontroller@index');
    Route::get('/kt_admin/e_product/{id}','productcontroller@edit');
    Route::get('/kt_admin/c_product','productcontroller@create');
    Route::post('/kt_admin/up_product/{id}','productcontroller@update');
    Route::get('/kt_admin/del_product/{id}','productcontroller@delete');
    Route::post('/kt_admin/add_product','productcontroller@add');

    /***********************************************************
     ****************** End product ***************************
     ***********************************************************/


/***********************************************************
 * ***************** Who description  ******************************
 ************************************************************/
Route::get('/kt_admin/who/{id}','howcontroller@index');
Route::post('/kt_admin/up_who/{id}','howcontroller@update');
/***********************************************************
 ****************** End Who description  ***************************
 ***********************************************************/


/***********************************************************
 * *****************    ******************************
 ************************************************************/
Route::get('/kt_admin/home/{id}','homecontroller@index');
Route::post('/kt_admin/up_home/{id}','homecontroller@update');
/***********************************************************
 ****************** End Home description  ***************************


/***********************************************************
 * ***************** Testimonial ******************************
 ************************************************************/
Route::get('/kt_admin/test','testimonialcontroller@index') ;
Route::post('/kt_admin/add_test','testimonialcontroller@add') ;
Route::post('/kt_admin/up_test/{id}','testimonialcontroller@update') ;
Route::get('/kt_admin/del_test/{id}','testimonialcontroller@delete') ;
/***********************************************************
 * ***************** End Testimonial ******************************
 ************************************************************/



/***********************************************************
 * ***************** About ******************************
 ************************************************************/
Route::get('/kt_admin/about','aboutcontroller@index') ;
Route::post('/kt_admin/add_about','aboutcontroller@add') ;
Route::post('/kt_admin/up_about/{id}','aboutcontroller@update') ;
Route::get('/kt_admin/del_about/{id}','aboutcontroller@delete') ;
/***********************************************************
 * ***************** End Testimonial ******************************
 ************************************************************/


/***********************************************************
 * ***************** Client ******************************
 ************************************************************/
Route::get('/kt_admin/client','clientcontroller@index') ;
Route::post('/kt_admin/add_client','clientcontroller@add') ;
Route::post('/kt_admin/up_client/{id}','clientcontroller@update') ;
Route::get('/kt_admin/del_client/{id}','clientcontroller@delete') ;
/***********************************************************
 * ***************** End Testimonial ******************************
 ************************************************************/

/***********************************************************
 ****************** Contact  ******************************
 ************************************************************/
Route::get('/kt_admin/contact','contactcontroller@index');

Route::post('/kt_admin/up_contact/{id}','contactcontroller@update');

/***********************************************************
 * ***************** End Contact ******************************/


/****************************************************
 * ***************** End Admin Panel****************
 *****************************************************/
Route::get('/logout',function (){
    auth()->logout();
    return view('auth.login');
});
});

/***********************************************************
 * ***************** Website  ******************************
 ************************************************************/

Route::get('/','sitecontroller@index');
Route::get('/Our_Services','sitecontroller@our_services');
Route::get('/Service/{id}_{name}','sitecontroller@service');
Route::get('/Product','sitecontroller@product');
Route::get('/About','sitecontroller@about');
Route::get('/Contact','sitecontroller@contact');
Route::get('/Hse','sitecontroller@hse');
Route::get('/Career','sitecontroller@career');

/***********************************************************
 ****************** End Website  **************************
 ************************************************************/

Auth::routes();

