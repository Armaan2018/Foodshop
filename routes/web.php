<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Route::get('/', function () {
	
//     return view('welcome');
// });

Auth::routes();


Route::get('/admin/login', [App\Http\Controllers\AdminLoginController::class, 'showAdminLogin'])->name('admin-login');
	Route::get('/admin/register', [App\Http\Controllers\AdminLoginController::class, 'showAdminRegister'])->name('admin-register');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::group(['middleware' => 'auth'],function(){
	Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
	
	Route::get('/dashboard', [App\Http\Controllers\AdminLoginController::class, 'showDashboard'])->name('dashboard');

	

	Route::get('logout', [App\Http\Controllers\auth\LoginController::class, 'logout'])->name('logout');


Route::get('burger', [App\Http\Controllers\BurgerController::class, 'showPage'])->name('page.show');

Route::post('burger-create', [App\Http\Controllers\BurgerController::class, 'burgerCreate'])->name('burger.create');


Route::get('burger-show', [App\Http\Controllers\BurgerController::class, 'burgerShow'])->name('burger.show');

Route::get('burger-edit/{id}', [App\Http\Controllers\BurgerController::class, 'burgerEdit'])->name('burger.edit');

Route::post('burger-update', [App\Http\Controllers\BurgerController::class, 'burgerUpdate'])->name('burger.update');

Route::get('burger-delete/{id}', [App\Http\Controllers\BurgerController::class, 'burgerDelete'])->name('burger.delete');

Route::get('all-orders', [App\Http\Controllers\CustomordController::class, 'showCustomerInfo'])->name('oreders.show.all');

Route::get('customer-orders', [App\Http\Controllers\CustomordController::class, 'showOrders'])->name('oreders.show');

Route::get('confirm-order/{id}', [App\Http\Controllers\CustomordController::class, 'showConfirm'])->name('confirm.order');

//confirmed page
Route::get('all-confirmed', [App\Http\Controllers\CustomordController::class, 'allconFirm'])->name('confirm.show.orders');


Route::get('all-confirmed/{id}', [App\Http\Controllers\CustomordController::class, 'delivarShow'])->name('delivary.show.orders');


Route::get('confirmed-orders', [App\Http\Controllers\CustomordController::class, 'showAllConfirm'])->name('allconfirm.show.orders');

//profile page
Route::get('profile', [App\Http\Controllers\HomeController::class, 'profilePage'])->name('profile');

//restaurant

Route::get('restaurant', [App\Http\Controllers\RestaurantController::class, 'showRestaurant'])->name('page.restaurant');

Route::post('restaurant-create', [App\Http\Controllers\RestaurantController::class, 'createRestaurant'])->name('create.restaurant');

Route::get('restaurant-show', [App\Http\Controllers\RestaurantController::class, 'showallRest'])->name('show.restaurant');

Route::get('restaurant-delete/{id}', [App\Http\Controllers\RestaurantController::class, 'deleteRest'])->name('del.restaurant');


});














//frontend
Route::get('/', [App\Http\Controllers\HomePageController::class, 'index'])->name('homepage');


Route::get('/burger/item/detail/{id}', [App\Http\Controllers\OrderDetailController::class, 'showSelected'])->name('detail.page.burger');



Route::post('/burger/item/detail/{id}', [App\Http\Controllers\OrderDetailController::class, 'orderCreate'])->name('detail.page.burger');


//customer route


Route::get('/burger/item/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'index'])->name('check.burger.customer');


Route::post('/burger/item/checkout/{id}', [App\Http\Controllers\CheckoutController::class, 'createCustomer'])->name('check.burger.customer.info');



Route::get('test', [App\Http\Controllers\BurgerController::class, 'burTest'])->name('burger.test');



//back end




///add to cart practice




//////

Route::get('protest', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');







