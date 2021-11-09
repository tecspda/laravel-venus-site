<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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

/* components */



/* pages */
Route::get("/", function () {
    return view("home");
})->name("home");

Route::get("/about", function () {
    return view("about");
})->name("about");

// Route::get("/blog", function () {
//     return view("news");
// })->name("blog");
// Route::get('/news', [NewsController::class, 'index'])->name('news');
// Route::get('/blog', [NewsController::class, 'index'])->name('news');


Route::get("/news", function () {
    return view("news");
})->name("news");
Route::get('/news', [NewsController::class, 'index1'])->name('news');


Route::get("/contact", function () {
    return view("contact");
})->name("contact");

Route::get("/page/good-fittings1", function () {
    return view("page.good-fittings1");
})->name("good-fittings1");

Route::get('/widget-currency', [WidgetController::class, 'get_widget_currency'])->name('widget-currency');


Route::get('info', function() { phpinfo(); });

use App\Http\Controllers\WidgetController;

Route::get('/user/{id}', [WidgetController::class, 'show']);

