<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProductController;
use App\Http\Controllers\frontend\ProjectController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\ImageController;

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

Route::get('/rezise', [ImageController::class, 'getResize'])->name('resize-img');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/page/{slug}', [HomeController::class, 'page'])->name('page');
Route::get('/gioi-thieu', [HomeController::class, 'about'])->name('about');
Route::get('/lien-he', [HomeController::class, 'contact'])->name('contact');
Route::get('/tin-tuc', [NewsController::class, 'news'])->name('news');
Route::get('/danh-muc/{slug}', [NewsController::class, 'news_cate'])->name('news_cate');
Route::get('/tin-tuc/{slug}', [NewsController::class, 'news_detail'])->name('news_detail');
Route::get('/tag/{slug}', [NewsController::class, 'news_tag'])->name('news_tag');
Route::get('/san-pham', [ProductController::class, 'product'])->name('product');
Route::get('/nhom-san-pham/{slug}', [ProductController::class, 'product_cate'])->name('product_cate');
Route::get('/san-pham/{slug}', [ProductController::class, 'product_detail'])->name('product_detail');
Route::get('/dich-vu/{slug}', [HomeController::class, 'services'])->name('services');
Route::get('/du-an', [ProjectController::class, 'view'])->name('project');
Route::get('/du-an/{slug}', [ProjectController::class, 'detail'])->name('detail');

/* admin */

use App\Http\Controllers\HomeController as homeadmin;
use App\Http\Controllers\UserController as useradmin;
use App\Http\Controllers\SettingController as settingadmin;
use App\Http\Controllers\ProductController as productadmin;
use App\Http\Controllers\MenuController as menuadmin;
use App\Http\Controllers\ProductCategoryController as productcategoryadmin;
use App\Http\Controllers\PageController as pageadmin;
use App\Http\Controllers\ContactController as contactadmin;
use App\Http\Controllers\SlideController as slideadmin;
use App\Http\Controllers\NewsController as newsadmin;
use App\Http\Controllers\NewsCategoryController as newscategoryadmin;
use App\Http\Controllers\BrandController as brandadmin;
use App\Http\Controllers\CustomerController as customeradmin;
use App\Http\Controllers\ServicesController as servicesadmin;
use App\Http\Controllers\ProjectController as projectadmin;
use App\Http\Controllers\DepartmentController as departmentadmin;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TimelineController as timelineadmin;

Route::prefix('dashboard')->group(function () {
	Route::get('/login', [homeadmin::class, 'login'])->name('dashboard-login');
	Route::post('/login', [homeadmin::class, 'login_post'])->name('dashboard-login-post');
	Route::get('/logout', [homeadmin::class, 'logout'])->name('dashboard-logout');
	Route::get('/403', [homeadmin::class, 'not_permisson'])->name('dashboard-403');
	Route::get('/404', [homeadmin::class, 'notfound_404'])->name('dashboard-404');
	Route::group(array('middleware' => 'auth'), function () {
		Route::post('/upload_temp', [homeadmin::class, 'upload_temp'])->name('dashboard-upload-temp');
		Route::post('/upload_one', [homeadmin::class, 'upload_one'])->name('dashboard-upload-one');
		Route::post('/upload_multi', [homeadmin::class, 'upload_multi'])->name('dashboard-upload-multi');
		Route::post('/upload_file', [homeadmin::class, 'upload_file'])->name('dashboard-upload-file');
		Route::group(array('middleware' => 'check_admin'), function () {
			Route::get('/', [homeadmin::class, 'index'])->name('dashboard-index');
			Route::get('/profile', [homeadmin::class, 'profile'])->name('dashboard-profile');
			Route::post('/profile', [homeadmin::class, 'profile_post'])->name('dashboard-profile-post');
			Route::prefix('slide')->group(function () {
				Route::get('/view', [slideadmin::class, 'create'])->name('view-slide');
				Route::post('/store', [slideadmin::class, 'store'])->name('post-add-slide');
				Route::get('/view_mobile', [slideadmin::class, 'create1'])->name('view-slide1');
				Route::post('/store1', [slideadmin::class, 'store1'])->name('post-add-slide1');
			});
			Route::prefix('timeline')->group(function () {
				Route::get('/view', [timelineadmin::class, 'index'])->name('view-timeline');
				Route::get('/add', [timelineadmin::class, 'create'])->name('add-timeline');
				Route::get('/edit/{slug}', [timelineadmin::class, 'edit'])->name('edit-timeline');
				Route::post('/add', [timelineadmin::class, 'store'])->name('post-add-timeline');
				Route::post('/update', [timelineadmin::class, 'update'])->name('post-edit-timeline');
				Route::post('/data', [timelineadmin::class, 'data'])->name('post-data-timeline');
				Route::post('/active/{slug}', [timelineadmin::class, 'active'])->name('post-active-timeline');
				Route::post('/delete/{slug}', [timelineadmin::class, 'remove'])->name('post-delete-timeline');
			});
			Route::prefix('department')->group(function () {
				Route::get('/view', [departmentadmin::class, 'index'])->name('view-department');
				Route::get('/add', [departmentadmin::class, 'create'])->name('add-department');
				Route::get('/edit/{slug}', [departmentadmin::class, 'edit'])->name('edit-department');
				Route::post('/add', [departmentadmin::class, 'store'])->name('post-add-department');
				Route::post('/update', [departmentadmin::class, 'update'])->name('post-edit-department');
				Route::post('/data', [departmentadmin::class, 'data'])->name('post-data-department');
				Route::post('/active/{slug}', [departmentadmin::class, 'active'])->name('post-active-department');
				Route::post('/delete/{slug}', [departmentadmin::class, 'remove'])->name('post-delete-department');
			});
			Route::prefix('project')->group(function () {
				Route::get('/view', [projectadmin::class, 'index'])->name('view-project');
				Route::get('/add', [projectadmin::class, 'create'])->name('add-project');
				Route::get('/edit/{slug}', [projectadmin::class, 'edit'])->name('edit-project');
				Route::post('/add', [projectadmin::class, 'store'])->name('post-add-project');
				Route::post('/update', [projectadmin::class, 'update'])->name('post-edit-project');
				Route::post('/data', [projectadmin::class, 'data'])->name('post-data-project');
				Route::post('/active/{slug}', [projectadmin::class, 'active'])->name('post-active-project');
				Route::post('/delete/{slug}', [projectadmin::class, 'remove'])->name('post-delete-project');
			});
			Route::prefix('services')->group(function () {
				Route::get('/view', [servicesadmin::class, 'index'])->name('view-services');
				Route::get('/add', [servicesadmin::class, 'create'])->name('add-services');
				Route::get('/edit/{slug}', [servicesadmin::class, 'edit'])->name('edit-services');
				Route::post('/add', [servicesadmin::class, 'store'])->name('post-add-services');
				Route::post('/update', [servicesadmin::class, 'update'])->name('post-edit-services');
				Route::post('/data', [servicesadmin::class, 'data'])->name('post-data-services');
				Route::post('/active/{slug}', [servicesadmin::class, 'active'])->name('post-active-services');
				Route::post('/delete/{slug}', [servicesadmin::class, 'remove'])->name('post-delete-services');
			});
			Route::prefix('brand')->group(function () {
				Route::get('/view', [brandadmin::class, 'index'])->name('view-brand');
				Route::get('/add', [brandadmin::class, 'create'])->name('add-brand');
				Route::get('/edit/{slug}', [brandadmin::class, 'edit'])->name('edit-brand');
				Route::post('/add', [brandadmin::class, 'store'])->name('post-add-brand');
				Route::post('/update', [brandadmin::class, 'update'])->name('post-edit-brand');
				Route::post('/data', [brandadmin::class, 'data'])->name('post-data-brand');
				Route::post('/active/{slug}', [brandadmin::class, 'active'])->name('post-active-brand');
				Route::post('/delete/{slug}', [brandadmin::class, 'remove'])->name('post-delete-brand');
			});
			Route::prefix('customer')->group(function () {
				Route::get('/view', [customeradmin::class, 'index'])->name('view-customer');
				Route::get('/add', [customeradmin::class, 'create'])->name('add-customer');
				Route::get('/edit/{slug}', [customeradmin::class, 'edit'])->name('edit-customer');
				Route::post('/add', [customeradmin::class, 'store'])->name('post-add-customer');
				Route::post('/update', [customeradmin::class, 'update'])->name('post-edit-customer');
				Route::post('/data', [customeradmin::class, 'data'])->name('post-data-customer');
				Route::post('/active/{slug}', [customeradmin::class, 'active'])->name('post-active-customer');
				Route::post('/delete/{slug}', [customeradmin::class, 'remove'])->name('post-delete-customer');
			});
			Route::prefix('news')->group(function () {
				Route::get('/view', [newsadmin::class, 'index'])->name('view-news');
				Route::get('/add', [newsadmin::class, 'create'])->name('add-news');
				Route::get('/edit/{slug}', [newsadmin::class, 'edit'])->name('edit-news');
				Route::post('/add', [newsadmin::class, 'store'])->name('post-add-news');
				Route::post('/update', [newsadmin::class, 'update'])->name('post-edit-news');
				Route::post('/data', [newsadmin::class, 'data'])->name('post-data-news');
				Route::post('/active/{slug}', [newsadmin::class, 'active'])->name('post-active-news');
				Route::post('/delete/{slug}', [newsadmin::class, 'remove'])->name('post-delete-news');
			});
			Route::prefix('news-cate')->group(function () {
				Route::get('/view', [newscategoryadmin::class, 'index'])->name('view-news-cate');
				Route::get('/add', [newscategoryadmin::class, 'create'])->name('add-news-cate');
				Route::get('/edit/{slug}', [newscategoryadmin::class, 'edit'])->name('edit-news-cate');
				Route::post('/edit/{slug}', [newscategoryadmin::class, 'update'])->name('post-edit-news-cate');
				Route::post('/add', [newscategoryadmin::class, 'store'])->name('post-add-news-cate');
				Route::post('/update', [newscategoryadmin::class, 'update_cate'])->name('post-update-news-cate');
				Route::post('/data', [newscategoryadmin::class, 'data'])->name('post-data-news-cate');
				Route::post('/active/{slug}', [newscategoryadmin::class, 'active'])->name('post-active-news-cate');
				Route::post('/delete', [newscategoryadmin::class, 'delete_cate'])->name('post-delete-news-cate');
			});

			Route::prefix('contact')->group(function () {
				Route::get('/view', [contactadmin::class, 'index'])->name('view-contact');
				Route::post('/data', [contactadmin::class, 'data'])->name('post-data-contact');
				Route::post('/delete/{slug}', [contactadmin::class, 'remove'])->name('post-delete-contact');
			});

			Route::prefix('product')->group(function () {
				Route::get('/view', [productadmin::class, 'index'])->name('view-product');
				Route::get('/add', [productadmin::class, 'create'])->name('add-product');
				Route::get('/edit/{slug}', [productadmin::class, 'edit'])->name('edit-product');
				Route::post('/add', [productadmin::class, 'store'])->name('post-add-product');
				Route::post('/update', [productadmin::class, 'update'])->name('post-edit-product');
				Route::post('/data', [productadmin::class, 'data'])->name('post-data-product');
				Route::post('/active/{slug}', [productadmin::class, 'active'])->name('post-active-product');
				Route::post('/delete/{slug}', [productadmin::class, 'remove'])->name('post-delete-product');
			});
			Route::prefix('product-cate')->group(function () {
				Route::get('/view', [productcategoryadmin::class, 'index'])->name('view-product-cate');
				Route::get('/add', [productcategoryadmin::class, 'create'])->name('add-product-cate');
				Route::get('/edit/{slug}', [productcategoryadmin::class, 'edit'])->name('edit-product-cate');
				Route::post('/edit/{slug}', [productcategoryadmin::class, 'update'])->name('post-edit-product-cate');
				Route::post('/add', [productcategoryadmin::class, 'store'])->name('post-add-product-cate');
				Route::post('/update', [productcategoryadmin::class, 'update_cate'])->name('post-update-product-cate');
				Route::post('/data', [productcategoryadmin::class, 'data'])->name('post-data-product-cate');
				Route::post('/active/{slug}', [productcategoryadmin::class, 'active'])->name('post-active-product-cate');
				Route::post('/delete', [productcategoryadmin::class, 'delete_cate'])->name('post-delete-product-cate');
			});

			Route::prefix('user')->group(function () {
				Route::get('/view', [useradmin::class, 'index'])->name('view-user');
				Route::get('/add', [useradmin::class, 'create'])->name('add-user');
				Route::get('/edit/{slug}', [useradmin::class, 'edit'])->name('edit-user');
				Route::post('/add', [useradmin::class, 'store'])->name('post-add-user');
				Route::post('/update', [useradmin::class, 'update'])->name('post-edit-user');
				Route::post('/data', [useradmin::class, 'data'])->name('post-data-user');
				Route::post('/active/{slug}', [useradmin::class, 'active'])->name('post-active-user');
				Route::post('/delete/{slug}', [useradmin::class, 'remove'])->name('post-delete-user');
				Route::post('/sync', [useradmin::class, 'sync'])->name('post-sync-user');
				Route::post('/price_book', [useradmin::class, 'price_book'])->name('post-price_book-user');
			});
			Route::prefix('menu')->group(function () {
				Route::get('/view', [menuadmin::class, 'index'])->name('view-menu');
				Route::get('/add', [menuadmin::class, 'create'])->name('add-menu');
				Route::get('/edit/{slug}', [menuadmin::class, 'edit'])->name('edit-menu');
				Route::post('/add', [menuadmin::class, 'store'])->name('post-add-menu');
				Route::post('/update', [menuadmin::class, 'update'])->name('post-edit-menu');
				Route::post('/data', [menuadmin::class, 'data'])->name('post-data-menu');
				Route::post('/delete/{slug}', [menuadmin::class, 'remove'])->name('post-delete-menu');
				Route::post('/quick_group', [menuadmin::class, 'quick_group'])->name('post-quick-menu');
				Route::post('/quick_add', [menuadmin::class, 'add_child'])->name('post-quick-add');
				Route::post('/quick_edit', [menuadmin::class, 'update_child'])->name('post-quick-edit');
				Route::post('/quick_delete', [menuadmin::class, 'delete_child'])->name('post-quick-delete');
				Route::post('/rename_group', [menuadmin::class, 'rename_group'])->name('post-rename-group');
				Route::get('/ajax/{slug}', [menuadmin::class, 'view_ajax'])->name('view-ajax');
			});
			Route::prefix('setting')->group(function () {
				Route::get('/setting/{slug}', [settingadmin::class, 'info'])->name('dashboard-setting');
				Route::post('/setting', [settingadmin::class, 'info_post'])->name('post-dashboard-setting');
				Route::post('/setting-image', [settingadmin::class, 'image_post'])->name('post-image-setting');
			});
			Route::prefix('page')->group(function () {
				Route::get('/view', [pageadmin::class, 'index'])->name('view-page');
				Route::get('/add', [pageadmin::class, 'create'])->name('add-page');
				Route::get('/edit/{slug}', [pageadmin::class, 'edit'])->name('edit-page');
				Route::post('/add', [pageadmin::class, 'store'])->name('post-add-page');
				Route::post('/update', [pageadmin::class, 'update'])->name('post-edit-page');
				Route::post('/data', [pageadmin::class, 'data'])->name('post-data-page');
				Route::post('/active/{slug}', [pageadmin::class, 'active'])->name('post-active-page');
				Route::post('/delete/{slug}', [pageadmin::class, 'remove'])->name('post-delete-page');
			});
			Route::prefix('student')->group(function () {
				Route::get('/view', [StudentsController::class, 'index'])->name('view-student');
				Route::get('/add', [StudentsController::class, 'create'])->name('add-student');
				Route::get('/edit/{id}', [StudentsController::class, 'edit'])->name('edit-student');
				Route::post('/add', [StudentsController::class, 'store'])->name('post-add-student'); // FIX: Đã có route này
				Route::post('/update', [StudentsController::class, 'update'])->name('post-edit-student');
				Route::post('/data', [StudentsController::class, 'data'])->name('post-data-student');
				Route::post('/delete/{id}', [StudentsController::class, 'destroy'])->name('post-delete-student');
				Route::post('/active/{id}', [StudentsController::class, 'active'])->name('post-active-student'); // FIX: Thay đổi method name
			});
		});
	});
});
