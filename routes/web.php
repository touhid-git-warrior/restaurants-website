<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\AdminIndex;
use App\Http\Controllers\backend\OrderBook;
use App\Http\Controllers\backend\SeoController;
use App\Http\Controllers\frontend\FrontController;



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
Route::get('/admin/dashboard',[AdminIndex::class,'indexView'])->name('admin.view')->middleware('admin');
Route::get('/admin/signup',[AdminIndex::class,'RagestrationView'])->name('admin.ragister');
Route::get('/admin/login',[AdminIndex::class,'LoginView'])->name('admin.login');
Route::post('/admin/signup/store',[AdminIndex::class,'SignupStore'])->name('admin.store');
Route::post('/admin/login/check',[AdminIndex::class,'LoginCheck'])->name('login.check');
Route::get('/admin/logout',[AdminIndex::class,'AdminLogout'])->name('admin.logout');
Route::post('/admin/order',[OrderBook::class,'OrderTake'])->name('order.set');
Route::prefix('/admin')->group(function(){	
Route::get('/order/list',[AdminIndex::class,'AdminOrders'])->name('admin.order');
Route::get('/order/delete/{id}',[AdminIndex::class,'AdminOrderDelete'])->name('order.delete');
Route::get('/order/message',[AdminIndex::class,'AdminUserMessage'])->name('order.message');
Route::get('/message/delete/{id}',[AdminIndex::class,'AdminMessageDelete'])->name('message.delete');
Route::get('/order/message',[AdminIndex::class,'AdminUserMessage'])->name('order.message');

Route::get('/order/setting',[AdminIndex::class,'OrderSettingsView'])->name('order.setting');
Route::post('/order/setting/update/{id}',[AdminIndex::class,'OrderSettingsUpdate'])->name('orderSeeting.update');



Route::get('/menu/view',[AdminIndex::class,'MenuView'])->name('admin.menu');
Route::post('/menu/store',[AdminIndex::class,'MenuStore'])->name('menu.store');
Route::get('/menu/delete/{id}',[AdminIndex::class,'MenuDelete'])->name('menu.delete');
Route::get('/menu/update/{id}',[AdminIndex::class,'MenuUpdate'])->name('menu.update');
Route::post('/menu/edate/{id}',[AdminIndex::class,'MenuEdate'])->name('menu.edate');

Route::get('/menu/title',[AdminIndex::class,'FoodMenuTitle'])->name('menu.title');

Route::post('/menu/title/edate/{id}',[AdminIndex::class,'MenuTitleEdate'])->name('menuTitle.edate');



Route::get('/navber',[AdminIndex::class,'AdminNavberView'])->name('admin.navbar');
Route::post('/navbar/store',[AdminIndex::class,'AdminNavbarStore'])->name('adminnavbar.store');
Route::get('/navbar/update/{id}',[AdminIndex::class,'AdminNavbarUpdate'])->name('navbar.update');
Route::post('/navbar/edate/{id}',[AdminIndex::class,'AdminNavbarEdate'])->name('navbar.edate');
Route::get('/navbar/delete/{id}',[AdminIndex::class,'AdminNavbarDelete'])->name('navbar.delete');

Route::get('/navberbooking',[AdminIndex::class,'AdminNavbarBooking'])->name('adminnavbar.booking');
Route::post('/navberbooking/store',[AdminIndex::class,'AdminBookNavbarStore'])->name('adminbooknavbar.store');

Route::get('/navberbookingupdate/{id}',[AdminIndex::class,'AdminNavbarBookingUpdate'])->name('navbarbooking.update');

Route::post('/navberbookingedate/{id}',[AdminIndex::class,'AdminNavbarBookingEdate'])->name('adminbooknavbar.edate');

Route::get('/navberbookingdelete/{id}',[AdminIndex::class,'AdminNavbarBookingDelete'])->name('adminbooknavbar.delete');



Route::get('/logo',[AdminIndex::class,'AdminLogo'])->name('admin.logo');

Route::post('/logo/store',[AdminIndex::class,'AdminLogoStore'])->name('adminlogo.store');

Route::get('/logo/update/{id}',[AdminIndex::class,'AdminLogoUpdate'])->name('adminlogo.update');

Route::post('/logo/edate/{id}',[AdminIndex::class,'AdminLogoEdate'])->name('adminlogo.edate');

Route::get('/logo/delete/{id}',[AdminIndex::class,'AdminLogoDelete'])->name('adminlogo.delete');

Route::get('/service',[AdminIndex::class,'AdminServiceView'])->name('admin.about');

Route::post('/service/store',[AdminIndex::class,'AdminServiceStore'])->name('adminabout.store');

Route::get('/service/delete/{id}',[AdminIndex::class,'AdminServiceDelete'])->name('about.delete');


Route::get('/service/update/{id}',[AdminIndex::class,'AdminServiceUpdate'])->name('about.update');

Route::post('/service/edate/{id}',[AdminIndex::class,'AdminServiceEdate'])->name('adminabout.edate');


Route::get('/about/side/image',[AdminIndex::class,'AdminAboutSideImageView'])->name('adabout.image');


Route::post('/about/image',[AdminIndex::class,'AdminAboutImageStore'])->name('aboutimage.store');

Route::get('/about/image/update/{id}',[AdminIndex::class,'AdminAboutImageupd'])->name('aboutimage.update');

Route::post('/about/image/edate/{id}',[AdminIndex::class,'AdminAboutImageEdt'])->name('aboutimage.edate');

Route::get('/about/image/delete/{id}',[AdminIndex::class,'AdminAboutImageDlt'])->name('aboutimg.delete');

Route::get('/about/desc/view',[AdminIndex::class,'AboutDescription'])->name('aboutdesc.view');

Route::post('/about/desc/store',[AdminIndex::class,'AboutDescriptionStore'])->name('aboutdesc.store');

Route::get('/about/desc/delete/{id}',[AdminIndex::class,'AboutDescDlt'])->name('aboutdesc.delete');

Route::get('/about/desc/update/{id}',[AdminIndex::class,'AboutDescUpd'])->name('aboutdesc.update');

Route::post('/about/desc/edate/{id}',[AdminIndex::class,'AboutDescriptionEdt'])->name('aboutdesc.edate');


Route::get('/chef/title',[AdminIndex::class,'ChefView'])->name('chef.title');

Route::post('/chef/title/update/{id}',[AdminIndex::class,'ChefUpdate'])->name('chef.edate');

Route::get('/chef',[AdminIndex::class,'ChefSettingView'])->name('admin.chef');

Route::post('/chef/store',[AdminIndex::class,'ChefStore'])->name('chef.store');

Route::get('/chef/delete/{id}',[AdminIndex::class,'ChefDelete'])->name('chef.delete');

Route::get('/chef/update/{id}',[AdminIndex::class,'ChefValUpdate'])->name('chef.update');

Route::post('/chef/edate/{id}',[AdminIndex::class,'ChefEdate'])->name('chef.edate');

Route::get('/contact/settings',[AdminIndex::class,'ContactSetting'])->name('contact.settings');

Route::post('/contact/settings/edate/{id}',[AdminIndex::class,'ContactSettingEdate'])->name('contactsetting.edate');

Route::get('/footer/setting',[AdminIndex::class,'FooterSetting'])->name('footer.settings');

Route::post('/footer/setting/edate/{id}',[AdminIndex::class,'FooterSettingEdate'])->name('footer.edate');


Route::get('/seo/manage',[SeoController::class,'SeoAdminView'])->name('seo.manage');

Route::post('/seo/manage/edate/{id}',[SeoController::class,'SeoAdminEdate'])->name('siteseo.edate');


Route::get('/slider/manage',[AdminIndex::class,'SliderView'])->name('slider.manage');

Route::post('/slider/store',[AdminIndex::class,'SliderStore'])->name('slider.store');

Route::get('/slider/delete/{id}',[AdminIndex::class,'SliderDelete'])->name('slider.delete');

Route::get('/slider/update/{id}',[AdminIndex::class,'SliderUpdate'])->name('slider.update');

Route::post('/slider/edate/{id}',[AdminIndex::class,'SliderEdate'])->name('slider.edate');






});


Route::get('/',[FrontController::class,'Index']);
Route::post('/user/contact',[FrontController::class,'UserContact'])->name('contact.add');


















