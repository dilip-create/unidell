<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductPageController;

// For BackEnd
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProductController;
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

Route::get('/ddd', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index']);
Route::get('/about535mgv6758g6gghvm67hc76vgj76Us',[HomeController::class,'aboutpage']); 
Route::get('/contact65857vjh34fxbc098n435dfgfjhUs',[HomeController::class,'contactpage']); 
Route::post('/contact65857vjh34fxbc098n435dfgfjhUs',[HomeController::class,'savecontact']); 
Route::get('/product547cgtd324sadz54iukln9856bvs',[ProductPageController::class,'productlist']);
Route::get('/product547cgtd324sadz54iukln9856bvs/{id}', [ProductPageController::class, 'productDetails']); 
Route::get('/cat54675hfghjg65ghd65fgh65pro/{id}', [ProductPageController::class, 'catbasedproductlist']); 
Route::get('/team547cgtd324sadz54iukln9856bvsl',[HomeController::class,'teamlist']);



// For Admin Routes start
Route::get('/BackEnd', function (Request $req) {
    return view('backend.login'); 
}); 
Route::get('/BackEnd/dashboard',[DashboardController::class,'index']);
Route::post('/adlogin',[AuthController::class,'adminlogin']);
Route::get('/BackEnd/cOUT0JnLE465knil45664mk',[AuthController::class,'alogout']); 
Route::get('/BackEnd/chan4545101dgf4r3645pass35fh34',[AuthController::class,'passwordpage']);  
Route::post('/BackEnd/chan4545101dgf4r3645pass35fh34',[AuthController::class,'changePassword']);

/* ------     Medicine  ------(start)--- */
Route::get('/BackEnd/product', [ProductController::class, 'list'])->name('list.device');
Route::get('/BackEnd/productForm/{end?}', [ProductController::class, 'new'])->name('form.device');
Route::post('/BackEnd/productSave', [ProductController::class, 'save'])->name('save.device');
Route::get('/BackEnd/productDelete/{id}', [ProductController::class, 'delete'])->name('delete.device');
/* ------     Medicine  ------(end)--- */
// For Admin Routes End
