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

// Route::get('/asd', [WidgetController::class, 'test_no_view'])->name('test_no_view');

// Route::get('', [WidgetController::class, 'show']);


//
// // Route::middleware('test1')->group(base_path('routes/web.php'));
// // Route::get('/widgets/test1', 'App\Http\Controllers\WidgetController@test1')->name("widgets/test1");
// Route::get('/widgets/test1', [WidgetController::class, 'test1'])->name('widgets.test1');
//
// Route::get('/widget-foo', 'WidgetController@foo');
// Route::get('/widget-bar', 'WidgetController@bar');
//
// // Route::get('/widget-bar', 'WidgetController@bar');
