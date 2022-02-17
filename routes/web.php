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

Route::redirect('/' , '/tr');



Route::group(['prefix' => '{language}'  ], function(){


  Route::get('/', function () {


    return view('welcome');
          } );

          Route::get('/hakkimizda', 'App\Http\Controllers\MoteksController@hakkimizda')->name('hakkimizda');


          Route::get('/kunye', 'App\Http\Controllers\MoteksController@kunye')->name('kunye');

          Route::get('/misyon-vizyon', 'App\Http\Controllers\MoteksController@misyon')->name('misyon');



          Route::get('/tarihce', 'App\Http\Controllers\MoteksController@tarihce')->name('tarihce');
          Route::get('/ticari', 'App\Http\Controllers\MoteksController@ticari')->name('ticari');
          Route::get('/cevre', 'App\Http\Controllers\MoteksController@cevre')->name('cevre');
          Route::get('/kapasite', 'App\Http\Controllers\MoteksController@kapasite')->name('kapasite');
          Route::get('/sertifakalar', 'App\Http\Controllers\MoteksController@sertifikalar')->name('sertifikalar');
          Route::get('/ihracatagı', 'App\Http\Controllers\MoteksController@ihracat')->name('ihracatagı');
          Route::get('/iletisim', 'App\Http\Controllers\MoteksController@iletisim')->name('iletisim');
          Route::get('/surdurulebilirlik', 'App\Http\Controllers\MoteksController@sustainability')->name('sustainability');



          Route::get('/iplik', 'App\Http\Controllers\MoteksController@iplik')->name('iplik');

          Route::get('/orme-ham-kumas', 'App\Http\Controllers\MoteksController@ormehamkumas')->name('ormehamkumas');

          Route::get('/orme-boyali-kumas', 'App\Http\Controllers\MoteksController@ormeboyalikumas')->name('ormeboyalikumas');

          Route::get('/inovatif-kumaslar' , 'App\Http\Controllers\MoteksController@inovatifkumas')->name('inovatifkumas');

        });


