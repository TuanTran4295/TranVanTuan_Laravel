<?php

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
//url: public/admin
Route::get('admin', function () {
    //redirect -> di chuyển đến 1 url
    //url -> tạo đường dẫn url
       return redirect(url('admin/tasks'));
});

//khai bao class controller o day
use App\Http\Controllers\TasksController;
//url: public/admin/tasks -> hien thi danh sach cac ban ghi
// Route::get('/url','TaskController@read');
Route::get("admin/tasks",[TasksController::class,"read"]);//->middleware("check_login");
//url: public/admin/tasks/update/id -> sua ban ghi - GET
Route::get("admin/tasks/update/{id}",[TasksController::class,"update"]);//->middleware("check_login");
//url: public/admin/tasks/update/id -> sua ban ghi - POST
Route::post("admin/tasks/update/{id}",[TasksController::class,"updatePost"])->name("update");//->middleware("check_login");
//url: public/admin/tasks/create -> tao moi ban ghi - GET
Route::get("admin/tasks/create",[TasksController::class,"create"]);//->middleware("check_login");
//url: public/admin/tasks/create -> sua ban ghi - POST
Route::post("admin/tasks/create",[TasksController::class,"createPost"]);//->middleware("check_login");
//url: public/admin/tasks/delete/id -> sua ban ghi - GET
Route::get("admin/tasks/delete/{id}",[TasksController::class,"delete"]);//->middleware("check_login");
//----------


Route::get('/', function () {
    return view('welcome');
});
