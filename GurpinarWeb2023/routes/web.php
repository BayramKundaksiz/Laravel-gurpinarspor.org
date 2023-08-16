<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\SendEmailController;

use Yajra\Datatables\Datatables;


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

Route::get('/test/env', function () {
    dd(env('DB_DATABASE')); // Dump 'db' variable value one by one
});

// Clear application cache:
Route::get('/cachetemizle', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/routetemizle', function() {
	Artisan::call('route:cache');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/configtemizle', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
});

// Clear view cache:
Route::get('/viewtemizle', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});

Route::get('/optimize', function() {
    Artisan::call('optimize:clear');
    return 'Optimize cache has been cleared';
});

Route::get('/', [HomeController::class,'index'])->name('anasayfayadon');

Route::get('/kategoriler',[HomeController::class,'kategorilerigetir'])->name('kategori');

Route::get('/iletisim',[HomeController::class,'iletisimegit'])->name('iletisimadi');

Route::post('/mesaji-ilet',[HomeController::class,'iletigonder'])->name('iletiyi-gonder');

Route::get('/anasayfa',[HomeController::class,'anasayfa'])->name('anasayfa');

Route::get('/redirect', [HomeController::class,'redirect'])->name('redirect');

Route::get('/anasayfa-ekle',[AdminController::class,'anasayfaekle'])->name('anasayfaekle');

Route::post('/haber-ekle',[AdminController::class,'anasayfasliderekle'])->name('haber-ekle');

Route::get('/guncel-yazi-ekle',[AdminController::class,'guncelyazi'])->name('guncelyaziekle');

Route::post('/guncel-yazi-eklendi',[AdminController::class,'guncelyaziekle'])->name('guncelyazieklendi');

Route::get('/ust-gorsel-ekle',[AdminController::class,'ustgorsel'])->name('ustgorselekle');

Route::post('/ust-gorsel-eklendi',[AdminController::class,'eklenecekustgorsel'])->name('ust-gorsel-ekle');

Route::get('/sag-kategori-ekle',[AdminController::class,'sagkategoriler'])->name('sagkategori');

Route::get('/duyuru-ekle',[AdminController::class,'duyurular'])->name('duyuru');

Route::post('/duyuru-eklendi',[AdminController::class,'duyuruekle'])->name('duyuru-ekle');

Route::get('/otobus-saati-ekle',[AdminController::class,'otobusler'])->name('otobussaati');

Route::get('/usta-ekle',[AdminController::class,'ustalar'])->name('ustalar');

Route::post('/otobus-saati-eklendi',[AdminController::class,'otobusekle'])->name('otobus-ekle');

Route::get('/duyurular',[HomeController::class,'tumduyurular'])->name('tumduyuru');

Route::get('/ustalar',[HomeController::class,'tumustalar'])->name('tumustalar');

Route::get('/alim-satimlar',[HomeController::class,'tumalimsatim'])->name('tumalimsatim');

Route::get('/otobus-saatleri',[HomeController::class,'tumotobussaatleri'])->name('tumotobus');

Route::get('/sohbet',[HomeController::class,'sohbet'])->name('sohbet');

Route::get('/resimler',[HomeController::class,'resimler'])->name('resimler');

Route::get('/vefat-listesi',[HomeController::class,'vefatlistesi'])->name('vefatlistesi');

Route::get('/videolar',[HomeController::class,'videolar'])->name('videolar');

Route::get('/video-ekle',[AdminController::class,'videoekle'])->name('videoekle');

Route::post('/video-eklendi',[AdminController::class,'videoeklendi'])->name('videoeklendi');

Route::post('/usta-ekle',[AdminController::class,'ustaekle'])->name('ustaekle');

Route::get('/alim-satim',[AdminController::class,'alimsatim'])->name('alimsatim');

Route::post('/alim-satim-ekle',[AdminController::class,'alimsatimekle'])->name('alimsatimekle');

Route::get('/resim-ekle',[AdminController::class,'resimekle'])->name('resimekle');

Route::get('/vefat-ekle',[AdminController::class,'vefatekle'])->name('vefatlistesiekle');

Route::post('/vefat-eklendi',[AdminController::class,'vefateklendi'])->name('vefatlistesieklendi');

Route::post('/resim-eklendi',[AdminController::class,'resimeklendi'])->name('resimeklendi');

Route::get('anasayfa/{slug}/{id}',[HomeController::class,'slug'])->name('anasayfaslug');

Route::get('vefat-listesi/{slug}/{id}',[HomeController::class,'vefatslug'])->name('vefatslug');

Route::get('duyurular/{slug}/{id}',[HomeController::class,'slugduyuru'])->name('duyuruslug');

Route::get('ustalar/{id}',[HomeController::class,'slugusta'])->name('ustalarslug');

Route::get('alim-satim/{id}',[HomeController::class,'slugalimsatim'])->name('alimsatimslug');

Route::get('otobus-saatleri/{id}',[HomeController::class,'slugotobus'])->name('otobusslugger');

Route::get('/anasayfa_sil/{id}', [AdminController::class, 'anasayfasil'])->name('anasayfa_sil');

Route::get('/anasayfa_guncelle/{id}', [AdminController::class, 'anasayfaguncelle'])->name('anasayfa_guncelle');

Route::post('/anasayfa_guncelleme_islemi/{id}', [AdminController::class, 'anasayfa_guncelleme_islemi'])->name('anasayfa_guncelleme_islemi');

Route::get('/mesaj_sil/{id}', [AdminController::class, 'mesajsil'])->name('mesaj_sil');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

