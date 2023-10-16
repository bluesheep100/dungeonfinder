<?php

use App\Http\Controllers\SpellController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->name('admin')->get('/admin', function () {
    return view('admin', [
        'navTabs' => ['Race', 'Class', 'Spell', 'Feat', 'Monster'],
    ]);
});

Route::group([
    'prefix' => '/admin',
    'middleware' => ['auth'],
], function () {
    Route::resource('spells', SpellController::class)->except(['create']);
});
