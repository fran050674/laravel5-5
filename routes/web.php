<?php

use App\UserProfile;
use Illuminate\Support\Facades\Mail;

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

Route::view('/', 'welcome', [
	'name' => 'Francisco'
]);

Route::redirect('welcome', '/');


/*
Como se hacia ante de laravel 5-5 el envio de correos de prueba
 */
// Route::get('mail', function() {
// 	Mail::to('fran@correo.com')->send(new App\Mail\WelcomeUser());
// });

/*
Ahora con laravel 5-5 se hace lo siguiente.
 */

Route::get('email', function() {
	return new App\Mail\WelcomeUser('Francisco Javier');
});

Route::get('profile', function() {
	return factory(UserProfile::class)->create();
});

Route::put('profile', 'ProfileController@update');