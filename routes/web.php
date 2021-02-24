<?php

use App\Http\Controllers\DBController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TieZi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Support\Facades\Auth;

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


//记录sql内容  废弃
// Event::listen('illuminate.query',function($query){
//     var_dump($query);
// });



/*
 * 显示资源列表*/
Route::get('/', function () {
    return view('welcome');
});


Route::get('/test001', function () {
    echo "我喜欢你";
});

Route::group([],function(){
    
});



//后台路由
Route::get('/user/add',[User::class,'add']);
Route::post('/user/insert',[User::class,'insert']);

//api路由
//name（别名）  创建地址别名
Route::get('user/{id}',[User::class,'show'])->name('user.show');
Route::get('/dawdadfwadaw/{id}',[User::class,'show'])->name('user.show');
Route::get('/users',[User::class,'index']);
//通过别名创建uil地址    查看uil地址route()
// Route::get('test',function(){
//     echo route('user.show',['id'>=100]);
// });

//资源控制器
//主控制器   一句定七句
Route::resource('/tiezi',App\Http\Controllers\TieZi::class);

Route::get('/request',[TieZi::class,'request']);

Route::get('/form',[TieZi::class,'form']);

Route::post('/upload',[TieZi::class,'upload']);


//cookie  请求
// Auth::routes();   //登录组件
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/cookie',[HomeController::class,'set']);
//闪存   只允许使用一次的session
Route::get('/flash',[HomeController::class,'flash']);
Route::get('/getFlash',[HomeController::class,'getFlash']);

//表单和表单验证
Route::get('/user-2',[HomeController::class,'user']);
Route::post('/user-2',[HomeController::class,'insert']);

//响应   json
Route::get('/response',[HomeController::class,'response']);
//视图
Route::get('/views',[HomeController::class,'views']);

//模板继承
Route::get('/page-1',[HomeController::class,'page1']);
Route::get('/page-2',[HomeController::class,'page2']);

//控制
Route::get('/control',[HomeController::class,'control']);
//数据库
Route::get('/select',[DBController::class,'select']);
Route::get('/trans',[DBController::class,'trans']);

//join  的使用
Route::get('/join',[DBController::class,'join']);

//数据库迁移   Migrations




?>