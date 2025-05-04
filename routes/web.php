<?php

use App\Http\Controllers\SampleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group in `app/HTTP/Kernel.php`. 
| Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blade', function () {
    return view('blade.index');
});

// Routing & its Types

// basic route
Route::get('/routeReturningString', function(){
    return 'Hello Routing!';
});

// parameterized routes
// requried parameters
Route::get('/requiredParameter/{id}', function($id){
    return 'id:' . $id;
});

// optional paramteres, (have to set a default value)
Route::get('/optionalParameter/{name?}', function($name = 'guest'){
    return 'name:'. $name;
});

// constraint parameters
Route::get('/constraintParameter/{id}', function($id){
    return "id: ". $id;
})->where('id', '[0-9]+');

// named routes
Route::get('/namedRouteEx', function(){

    $url = route('dashboard');

    return 'url: '. $url;
})->name('dashboard');

// route groups
Route::prefix('support')->group(function(){
    Route::get('/feedback', function(){
        return 'feedback dashboard';
    });
    Route::get('/complaint', function(){
        return 'compaint dashboard';
    });
});

// route for controller
Route::get('/sampleControllerRoute', [SampleController::class, 'index']);
Route::get('/sampleControllerRoute/show', [SampleController::class, 'show']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard'); // ensure this view exists
    });
});

/*
Create a controller named ProductController with RESTful resource methods.
b. Show how to define a resource route for this controller.
c. Write a Blade view for displaying a list of products.
*/

// Resource route for ProductController
Route::resource('products', ProductController::class);
// rest of CRUD operations and their routes are defined in ProductController


// File Upload
Route::get('/upload', function () {
    return view('upload');
});
Route::post('/upload', [FileUploadController::class, 'uploadFile']);

// Localization
// sample view to show localization
Route::get('/localized', function () {
    app()->setLocale(session('locale', config('app.locale')));
    return view('localized');
})->name('localized');
// language switcher
Route::get('lang/{locale}', function ($locale) {
    session(['locale' => $locale]);
    app()->setLocale($locale);
    return redirect()->back();
});

// Authentication
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

// Admin Middleware on Route
Route::get('/admin/dashboard', function(){
    return view('admin.dashboard');
})->middleware('admin');


// Email
use App\Http\Controllers\ContactController;

Route::get('/contact', function() {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'send']);

// Cookies
use Illuminate\Http\Request;

Route::view('/theme', 'theme')->name('theme');

Route::post('/set-theme', function (Request $request) {
    $theme = $request->input('theme', 'light');
    return redirect()->route('theme')
        ->withCookie(cookie('theme', $theme, 60*24*30)); // 30 days
})->name('set.theme');