<?php

use App\Http\Controllers\PControler;
use Illuminate\Support\Facades\Route;
use App\Models\post;

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

Route::get('/', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('beranda', [
        'title' => 'utama',
        'arfah' => 'Muh. Arfah Awaluddin T.',
        'isra' => 'Muhammad Al Isra',
        'devika' => 'Devika Diyanti Haris',
        'firman' => 'Muh. Firmansyah',
        'altaf' => 'Andi Aulia Ahmad Althaf P.',
        'akram' => 'Muhaiminul Akram'
    ]);
});

Route::get('/arf', function () {
    return view('bdataarfah', [
        'title' => 'biodata',
        'p' => 'Muh. Arfah Awaluddin T.',
        'n' => '1929042012',
    ]);
});
Route::get('/isr', function () {
    return view('bdataisra', [
        'title' => 'biodata',
        'p' => 'Muhammad Al Isra',
        'n' => '1929042013',
    ]);
});
Route::get('/dev', function () {
    return view('bdatadevika', [
        'title' => 'biodata',
        'p' => 'Devika Diyanti Haris',
        'n' => '1929042014',
    ]);
});
Route::get('/fir', function () {
    return view('bdatafirman', [
        'title' => 'biodata',
        'p' => 'Muh. Firmansyah',
        'n' => '1929042015',
    ]);
});
Route::get('/atf', function () {
    return view('bdataalthaf', [
        'title' => 'biodata',
        'p' => 'Andi Aulia Ahmad Althaf P.',
        'n' => '1929042016',
    ]);
});
Route::get('/akr', function () {
    return view('bdataakram', [
        'title' => 'biodata',
        'p' => 'Muhaiminul Akram',
        'n' => '1929042017',
    ]);
});



Route::get('/dll', function () {
    return view('zlaravel');
});

Route::get('/refr', function () {
    return view('template', [
        'title' => 'templ'
    ]);
});

//Route::get('/bioarfah', function () {
//    return view('bioarfah');
//});

Route::get('/anim', function () {
    return view('tesanimasi');
});

Route::get('/pengetes', function () {
    return view('zztes');
});

//

Route::get('/about', [PControler::class, 'index']);
//single pos
Route::get('about/{slug}', [PControler::class, 'show']);

