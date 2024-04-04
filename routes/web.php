<?php

use App\Livewire\Home;
use App\Livewire\Gedung\GedungEdit;
use App\Livewire\Gedung\GedungIndex;
use Illuminate\Support\Facades\Auth;
use App\Livewire\Gedung\GedungCreate;
use App\Livewire\Ruangan\RuanganEdit;
use Illuminate\Support\Facades\Route;
use App\Livewire\Ruangan\RuanganIndex;
use App\Livewire\Kategori\KategoriEdit;
use App\Livewire\Ruangan\RuanganCreate;
use App\Http\Controllers\HomeController;
use App\Livewire\Kategori\KategoriIndex;
use App\Livewire\Kategori\KategoriCreate;

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
    return view('welcome');
});

Auth::routes(['register'=>false]);


Route::get('/home', Home::class)->middleware('auth')->name('home');

Route::get('/gedung', GedungIndex::class)->middleware('auth')->name('gedung.index');
Route::get('/gedung/create', GedungCreate::class)->middleware('auth')->name('gedung.create');
Route::get('/gedung/edit/{id}', GedungEdit::class)->middleware('auth')->name('gedung.edit');

Route::get('/ruangan', RuanganIndex::class)->middleware('auth')->name('ruangan.index');
Route::get('/ruangan/create', RuanganCreate::class)->middleware('auth')->name('ruangan.create');
Route::get('/ruangan/edit/{id}', RuanganEdit::class)->middleware('auth')->name('ruangan.edit');

Route::get('/kategori', KategoriIndex::class)->middleware('auth')->name('kategori.index');
Route::get('/kategori/create', KategoriCreate::class)->middleware('auth')->name('kategori.create');
Route::get('/kategori/edit/{id}', KategoriEdit::class)->middleware('auth')->name('kategori.edit');