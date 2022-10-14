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


Route::get('/', function () {
    $client1 = 'Bianca';
    $pro1 = 'Owner Pet Shop';
    $testi1 = 'Senang bisa bekerja sama dengan Smallty selama 2 tahun terakhir, kinerja bisnis yang saya geluti menjadi berkembang pesat.';

    $client2 = 'Raymond Chin';
    $pro2 = 'Founder Ternak Uang';
    $testi2 = 'Ternak Uang yang notabene bisnis yang lahir dari masa sulit saat pandemi tapi dengan kerja keras team Smallty kami bisa terus naik hingga hari ini.';

    $client3 = 'Carmen';
    $pro3 = 'Owner CMS';
    $testi3 = 'Sangat terbukti semua traffic di sosmed CMS melejit pesat.';
    return view('index', compact('client1','pro1','testi1','client2','pro2','testi2','client3','pro3','testi3'));
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/testimonials', function () {
    $client1 = 'Bianca';
    $pro1 = 'Owner Pet Shop';
    $testi1 = 'Senang bisa bekerja sama dengan Smallty selama 2 tahun terakhir, kinerja bisnis yang saya geluti menjadi berkembang pesat.';

    $client2 = 'Raymond Chin';
    $pro2 = 'Founder Ternak Uang';
    $testi2 = 'Ternak Uang yang notabene bisnis yang lahir dari masa sulit saat pandemi tapi dengan kerja keras team Smallty kami bisa terus naik hingga hari ini.';

    $client3 = 'Carmen';
    $pro3 = 'Owner CMS';
    $testi3 = 'Sangat terbukti semua traffic di sosmed CMS melejit pesat.';
    return view('testimonials', compact('client1','pro1','testi1','client2','pro2','testi2','client3','pro3','testi3'));
});

Route::get('/about', function () {
    return view('about');
});

Route::fallback(function () {
    return "Wah kamu nyasar, turn back!";
});
