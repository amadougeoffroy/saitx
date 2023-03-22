<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|  
*/

Route::get('/', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('welcome');
});

Route::get('langue/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        $locale = @Session::get("locale") ?? App::currentLocale();
        return redirect('langue/'.$locale);
    }
    App::setLocale($locale);
    Session::put("locale",$locale);
    return view('welcome');
});

Route::get('/productos', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('productos');
});


Route::get('/elevadores-lentos', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('elevadores-lentos');
});

Route::get('/pasajeros', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('elevadores-lentos');
});


Route::get('/componentes-y-modernizaciones', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('componentes-y-modernizaciones');
});


Route::get('/cabinas', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('cabinas');
});


Route::get('/documentacion', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('documentacion');
});


Route::get('/servicios', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('servicios');
});


Route::get('/proyectos', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('proyectos');
});


Route::get('/sobre-saitx', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('sobre-saitx');
});


Route::get('/presentacion-saitx', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('presentacion-saitx');
});


Route::get('/equipe-saitx', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('equipe-saitx');
});


Route::get('/certificaciones', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('certificaciones');
});


Route::get('/contacto', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('contacto');
});


Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});

Route::get('/noticias', function () {
    $locale = @Session::get("locale") ?? App::currentLocale();
    return view('noticias');
});
