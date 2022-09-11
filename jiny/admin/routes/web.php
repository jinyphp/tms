<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


// admin 접속 uri prefix
$prefixAdmin = config('jiny.admin.setting.prefix');
if(!$prefixAdmin) $prefixAdmin = "admin";


// 어드민 초기설정, 로그인
use Jiny\Auth\Http\Controllers\Auth\AuthenticatedSessionController;
Route::middleware(['web'])
->name('admin.')
->prefix($prefixAdmin)->group(function () {
    Route::resource('setup',\Jiny\Admin\Http\Controllers\Setup::class);

    // admin login
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('admin-login');
});


Route::middleware(['web','auth:sanctum', 'verified'])
->name('admin.')
->prefix($prefixAdmin)->group(function () {



    // 사이트 데쉬보드
    Route::get('/', [\Jiny\Site\Http\Controllers\Admin\Dashboard::class, "index"]);




    //회원관리
    Route::prefix('/users')->name('users.')->group(function () {
        Route::resource('list.profile', \Jiny\Admin\Http\Controllers\UserProfileController::class);
        Route::get('/', [\Jiny\Admin\Http\Controllers\UserController::class,"index"]);
    });

    /*
    Route::prefix('/theme')->name('theme.')->group(function () {
        Route::resource('list',\Jiny\Admin\Http\Controllers\Theme\ThemeListController::class);
    });
    */

    /*
    Route::prefix('/site')->name('site.')->group(function () {
        ## 메뉴구조
        //Route::resource('menu',\Jiny\Admin\Http\Controllers\Site\MenuListController::class);
        //return view('jinyadmin::site.menu.index');
        Route::view('menu', 'jinyadmin::site.menu.code');
        //Route::view('menu/items', 'jinyadmin::site.menu.items');
        Route::get('menu/{id}',[\Jiny\Admin\Http\Controllers\Site\MenuItems::class,"index"]);

    });
    */




});
