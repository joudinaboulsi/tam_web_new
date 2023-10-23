<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
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

/********  Frontend Pages *********/
Route::get('/', [PageController::class, 'home'])->name('home');
Route::post('/contact', [ContactController::class, 'getContactForm'])->name('contact_path');
Route::post('/interest', [ContactController::class, 'getInterestForm'])->name('interest_path');

/********  Cms Pages *********/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*******  Home Sliders Page *********/
Route::get('/cms/slider', 'HomeSliderController@index')->name('sliderCms');
Route::get('/cms/slider-create', 'HomeSliderController@create')->name('sliderCreate');
Route::post('/cms/slider-store', 'HomeSliderController@store')->name('sliderStore');
Route::get('/cms/slider-edit-{id}', 'HomeSliderController@edit')->name('sliderEdit');
Route::post('/cms/slider-update-{id}', 'HomeSliderController@update')->name('sliderUpdate');
Route::delete('/cms/slider-detail-delete-{id}', 'HomeSliderController@delete')->name('sliderDelete');
/*******  Home Sliders Page Ending */

/*******  About Page *********/
Route::get('/cms/about', 'AboutController@index')->name('aboutCms');
Route::post('/cms/about-store', 'AboutController@store')->name('aboutStore');
/*******  About Page Ending */

/*******  Mission Page *********/
Route::get('/cms/mission', 'MissionController@index')->name('missionCms');
Route::post('/cms/mission-store', 'MissionController@store')->name('missionStore');
/*******  Mission Page Ending */

/*******  Vision Page *********/
Route::get('/cms/vision', 'VisionController@index')->name('visionCms');
Route::post('/cms/vision-store', 'VisionController@store')->name('visionStore');
/*******  Vision Page Ending */

/*******  Service Page *********/
Route::get('/cms/service', 'ServiceController@index')->name('serviceCms');
Route::post('/cms/service-store', 'ServiceController@store')->name('serviceStore');
/*******  Service Page Ending */

/*******  Product Page *********/
Route::get('/cms/products', 'ProductController@index')->name('productCms');
Route::post('/cms/product-title-store', 'ProductController@storePage')->name('productStoreTitle');
Route::get('/cms/product-create', 'ProductController@create')->name('productCreate');
Route::post('/cms/product-store', 'ProductController@store')->name('productStore');
Route::get('/cms/product-edit-{id}', 'ProductController@edit')->name('productEdit');
Route::post('/cms/product-update-{id}', 'ProductController@update')->name('productUpdate');
Route::delete('/cms/product-detail-delete-{id}', 'ProductController@delete')->name('productDelete');
/*******  Product Page Ending */

/*******  Project Page *********/
Route::get('/cms/projects', 'ProjectController@index')->name('projectCms');
Route::post('/cms/project-title-store', 'ProjectController@storePage')->name('projectStoreTitle');
Route::get('/cms/project-create', 'ProjectController@create')->name('projectCreate');
Route::post('/cms/project-store', 'ProjectController@store')->name('projectStore');
Route::get('/cms/project-edit-{id}', 'ProjectController@edit')->name('projectEdit');
Route::post('/cms/project-update-{id}', 'ProjectController@update')->name('projectUpdate');
Route::delete('/cms/project-detail-delete-{id}', 'ProjectController@delete')->name('projectDelete');
/*******  Project Page Ending */

/*******  client Page *********/
Route::get('/cms/clients', 'ClientController@index')->name('clientCms');
Route::post('/cms/client-title-store', 'ClientController@storePage')->name('clientStoreTitle');
Route::get('/cms/client-create', 'ClientController@create')->name('clientCreate');
Route::post('/cms/client-store', 'ClientController@store')->name('clientStore');
Route::get('/cms/client-edit-{id}', 'ClientController@edit')->name('clientEdit');
Route::post('/cms/client-update-{id}', 'ClientController@update')->name('clientUpdate');
Route::delete('/cms/client-detail-delete-{id}', 'ClientController@delete')->name('clientDelete');
/*******  client Page Ending */

/*******  Contact  Page *********/
Route::get('/cms/contact', 'ContactCms@index')->name('contactCms');
Route::post('/cms/contact-store', 'ContactCms@store')->name('contactStore');
/*******  Contact  Page Ending */

/*******  Settings Page *********/
Route::get('/cms/settings', 'SettingsController@index')->name('settingsCms');
Route::post('/cms/settings-store', 'SettingsController@store')->name('settingsStore');
/*******  Settings Page Ending */

/*******  Seo Pages *********/
Route::get('/cms/seo', 'SeoPageController@index')->name('seoCms');
Route::post('/cms/seo-update-{id}', 'SeoPageController@update')->name('seoUpdate');
/*******  Seo Pages Ending */