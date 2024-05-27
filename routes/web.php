<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManagerController;
  
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
  
Route::get('/', function () {
    return view('userHome');
});
  
Auth::routes();
  

//All Normal Users Routes List

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  

//All Admin Routes List

Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/team', [AdminController::class, 'adminTeam'])->name('admin.team');
    Route::get('/admin/project', [AdminController::class, 'adminProject'])->name('admin.project');
    Route::get('/admin/profile', [AdminController::class, 'adminProfile'])->name('admin.profile');
});
  

//All Admin Routes List

Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [ManagerController::class, 'managerHome'])->name('manage.home');
    Route::get('/manager/Create-post', [ManagerController::class, 'managePost'])->name('manage.post');
    Route::Post('/manager/post', [ManagerController::class, 'createPost'])->name('createPost');
    
});