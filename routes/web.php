 <?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
 

Route::get('/ppdb', function () {
    return view('ppdb');
});

Auth::routes();

Route::get('/', 'HomeController@index'); 
Route::get('/home', 'HomeController@home'); 
Route::get('/blog', 'HomeController@blog'); 
Route::get('/leader-class', 'HomeController@leaderclass'); 
Route::get('/programmer-class', 'HomeController@programmerclass'); 
Route::get('/journalis-class', 'HomeController@journalisclass'); 
Route::get('/tahfidzul-class', 'HomeController@tahfidzulclass'); 
Route::get('/chef-class', 'HomeController@chefclass'); 
Route::get('/athlate-class', 'HomeController@athlateclass'); 

Route::post('/ppdb/daftar',[ 
'as' => 'ppdb.daftar',
'uses' => 'HomeController@daftar'
] );

Route::post('/ppdb/daftar-siswa',[ 
'as' => 'ppdb.daftar_siswa',
'uses' => 'HomeController@daftar_siswa'
] );

Route::post('/ppdb/bukti-pembayaran',[ 
'as' => 'ppdb.bukti_pembayaran',
'uses' => 'HomeController@bukti_pembayaran'
] );

Route::group(['prefix'=>'admin', 'middleware'=>['auth']], function () {

Route::resource('siswa', 'SiswaController');	
Route::resource('post', 'PostControllers');	
Route::resource('master_users', 'UserControllers');	
Route::resource('specialis_class', 'SpecialisClassControllers');	

Route::get('/pendaftaran-siswa', 'AdminControllers@pendaftaran'); 
 
Route::get('master_users/filterotoritas/{id}',[
	'middleware' => ['auth'],
	'as' => 'master_users.filter_otoritas',
	'uses' => 'UserControllers@filter_otoritas'
	]);
   
	Route::get('master_users/reset/{id}',[
	'middleware' => ['auth','role:admin'],
	'as' => 'master_users.reset',
	'uses' => 'UserControllers@reset'
	]);

});