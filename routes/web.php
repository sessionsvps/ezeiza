<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErosFlameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LeBeauController;
use App\Http\Controllers\LeMaleController;
use App\Http\Controllers\PoloBlueController;
use App\Http\Controllers\ScandalController;
use App\Http\Controllers\SWYController;
use App\Http\Controllers\UltraMaleController;
use App\Http\Controllers\YSLController;
use App\Http\Controllers\CatalogoController;
use App\Http\Controllers\AboutUsController;

Route::get('/', [HomeController::class, 'openIndex'])->name('index');
Route::get('/nosotros', [AboutUsController::class, 'openAboutUsView'])->name('aboutUs');
Route::get('/catalogo', [CatalogoController::class, 'openCatalogoView'])->name('catalogo');
Route::get('/catalogo/erosflame', [ErosFlameController::class, 'openErosFlameView'])->name('erosFlame');
Route::get('/catalogo/lebeau', [LeBeauController::class, 'openLeBeauView'])->name('leBeau');
Route::get('/catalogo/lemale', [LeMaleController::class, 'openLeMaleView'])->name('leMale');
Route::get('/catalogo/poloblue', [PoloBlueController::class, 'openPoloBlueView'])->name('poloBlue');
Route::get('/catalogo/scandal', [ScandalController::class, 'openScandalView'])->name('scandal');
Route::get('/catalogo/swy', [SWYController::class, 'openSWYView'])->name('swy');
Route::get('/catalogo/ultramale', [UltraMaleController::class, 'openUltraMaleView'])->name('ultraMale');
Route::get('/catalogo/ysl', [YSLController::class, 'openYSLView'])->name('ysl');
