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
use App\Mail\Welcome;

Route::get('/send', function () {
    Mail::to('carrie18@example.com')->send(new Welcome);

    return view('welcomemal');
});


Route::get('/notificaciones', function () {
    return view('noti');
})->name('notificaciones');
Route::get('mail/send', 'MailController@send');
Route::redirect('/' ,'/posts');
Route::redirect('/home' ,'/posts');
Route::get('/today', 'PostController@today')->name('today');
Route::get('/posts', 'PostController@index');
Route::get('/posts/create', 'PostController@create')->name('create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/MyPosts', 'PostController@userPosts')->name('MyPosts');
Route::get('/posts/{id}', 'PostController@show')->name('post');
Route::post('/comments', 'CommentController@store');
Route::delete('/posts/{id}', 'PostController@destroy')->name('morido');
Route::get('usuario/editar', 'UserController@edit')->name('editarUsuario');
Route::post('usuario/editar', 'UserController@update');

Auth::routes();

//Route::get('/home', 'PostController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
