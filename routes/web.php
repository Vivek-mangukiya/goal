<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['prefix'=>'/','namespace'=>'Front'],function(){
    
    Route::get('/', 'HomeController@index')->name('home');

    Route::group(['prefix'=>'services'],function(){
        Route::get('detailed-MEP-design','ServicesController@detailedMEPdesign')->name('services.detailedMEPdesign');
        Route::get('effective-REVIT-modelling','ServicesController@effectiveREVITmodelling')->name('services.effectiveREVITmodelling');
        Route::get('on-demand-MEP-services','ServicesController@onDemandMEPServices')->name('services.onDemandMEPServices');
        Route::get('services-electrical','ServicesController@servicesElectrical')->name('services.servicesElectrical');
        Route::get('services-mechanical','ServicesController@servicesMechanical')->name('services.servicesMechanical');
        Route::get('services-plumbing','ServicesController@servicesPlumbing')->name('services.servicesPlumbing');
    });

});

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','namespace'=>'Admin'],function (){
    Route::get('login','AuthController@login')->name('admin.login');
    Route::post('login','AuthController@doLogin')->name('admin.login');

    Route::group(['middleware' => ['admin']], function() {
        Route::get('/logout','AuthController@logout')->name('admin.logout');
        Route::get('/profile','AuthController@profile')->name('admin.profile');
        Route::post('/profile','AuthController@update')->name('admin.profile.update');
        Route::post('/changepassowrd','AuthController@changePassowrd')->name('admin.profile.changepassowrd');

        Route::get('/','HomeController@index')->name('admin');
        Route::get('/dashboard','HomeController@index')->name('admin.home');

        Route::group(['prefix' => 'pages'], function () {
            Route::get('header','PageController@header')->name('pages.header');
            Route::get('footer','PageController@footer')->name('pages.footer');
            Route::get('home','PageController@home')->name('pages.home');
            Route::get('detailedMEPdesign','PageController@detailedMEPdesign')->name('pages.detailedMEPdesign');
            Route::get('effectiveREVITmodelling','PageController@effectiveREVITmodelling')->name('pages.effectiveREVITmodelling');
            
            Route::post('update-meta','PageController@updateMeta')->name('updateMeta');
            Route::post('update-page-content','PageController@updatePageContent')->name('updatePageContent');
        });
        //user route
        Route::group(['prefix' => 'user'], function () {
            Route::get('/','UserController@index')->name('admin.user');
            Route::post('/store','UserController@store')->name('admin.user.store');
            Route::get('/create','UserController@create')->name('admin.user.create');
            Route::get('/edit/{id}','UserController@edit')->name('admin.user.edit');
            Route::post('/update','UserController@update')->name('admin.user.update');
            Route::post('/delete','UserController@destroy')->name('admin.user.delete');
            Route::get('/detail/{id}','UserController@edit')->name('admin.user.detail');
            Route::get('/getlist','UserController@list')->name('admin.user.list');
            Route::post('/status/','UserController@statusChange')->name('admin.user.status');
        });

        // seller 
    });
});
