<?php

use App\Models\Links;
use Illuminate\Support\Facades\Redis;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/links', function () {
    return view('links.list');
})->middleware(['auth'])->name('links');

Route::get('/link/new', function () {
    return view('links.create');
})->middleware(['auth'])->name('links.create');

require __DIR__.'/auth.php';

require __DIR__.'/admin.php';

Route::get('/' . config('eclink.suffix') . '/{slug}', function ($slug) {
    $link = Links::whereSlug($slug)->first();
    if($link == null){
        abort(500, 'Link does not exist.');
    }
    else{
        Redis::zincrby('total.clicks', 1, $link->slug);
        Redis::zincrby('user.clicks', 1, $link->user_id);
        return redirect()->away($link->url);
    }
});
