<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

// STRONA GŁÓWNA:

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/price', function () {
    return view('price');
});

Route::get('/dataeditor/{id}', function ($id) {
    $rekord=User::findOrFail($id);
    return view('dataeditor',['row'=>$rekord]);
})->name('edit.user')->middleware('privilege.admin');

Route::get('/actualusers', function () {
    return view('actualusers');
});

// -----------------------------------------------ADMIN:---------------------------------------------------------

Route::get('/admin',['middleware'=>'privilege.admin', function () {
    return view('admin');
}]);
Route::get('/allusers', 'App\Http\Controllers\AdminController@index')->name('allusers')->middleware('privilege.admin'); // Wyświetlenie strony wyświetlającej wszystkich zalogowanych użytkowników.
Route::post('/update_user/{id}', 'App\Http\Controllers\AdminController@update_user')->name('update_user')->middleware('privilege.admin');   // Zmiana danych użytkownika
Route::get('/delete_user/{id}','App\Http\Controllers\AdminController@delete_function')->name('delete_user')->middleware('privilege.admin'); //Usunięcie użytkownika

// -----------------------------------------------USER:---------------------------------------------------------


Route::get('/user',['middleware'=>'privilege.user', function () {
    return view('user');
}]);

Route::get('/data', 'App\Http\Controllers\UserController@index')->name('data')->middleware('auth');  // Wyświetlenie strony edycji hasła, po kliknięciu w zakładkę Moje konto 
Route::post('/changepassword', 'App\Http\Controllers\UserController@changepassword')->name('changepassword');   // Zmiana hasła przez użytkowników. 


// ------------------------------------------  INSTRUCTOR:------------------------------------------------------

Route::get('/instructor',['middleware'=>'privilege.instructor', function () {
    return view('instructor');
}]); 





Auth::routes();
