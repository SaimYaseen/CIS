<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\SiteDetailsController;
use App\Http\Controllers\LabourDetailsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// for view pages 
Route::get('/',[viewController::class,'index'])->name('index');
Route::get('/about',[viewController::class,'about'])->name('about');
Route::get('/contact',[viewController::class,'contact'])->name('contact');
Route::get('/projects',[viewController::class,'projects'])->name('projects');
Route::get('/project-details',[viewController::class,'projectDetails'])->name('projectDetails');
Route::get('/sample-inner-page',[viewController::class,'sampleInnerPage'])->name('sampleInnerPage');
Route::get('/services',[viewController::class,'services'])->name('services');
Route::get('/service-details',[viewController::class,'serviceDetails'])->name('service-details');

// for login and registration
// Route::get('/', [CustomAuthController::class, 'index']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
// contractors For admin panel functions
Route::prefix('contractors')->middleware('auth', 'App\Http\Middleware\IsAdminMiddleware')->group(function(){
Route::get('/getContractors', [CustomAuthController::class, 'getContractors'])->name('getContractors');
Route::get('/showContractorsForm', [CustomAuthController::class, 'showContractorsForm'])->name('showContractorsForm');
Route::get('/addContractor', [CustomAuthController::class, 'addContractor'])->name('addContractor');
Route::get('/updateContractor', [CustomAuthController::class, 'updateContractor'])->name('updateContractor');
Route::get('/editContractor/{id}', [CustomAuthController::class, 'editContractor'])->name('editContractor');
Route::get('/deleteContractor/{id?}', [CustomAuthController::class, 'deleteContractor'])->name('deleteContractor');
});
// users For admin panel functions
Route::prefix('users')->middleware('auth', 'App\Http\Middleware\IsAdminMiddleware')->group(function(){
Route::get('/getUsers', [CustomAuthController::class, 'getUsers'])->name('getUsers');
Route::get('/showUserForm', [CustomAuthController::class, 'showUserForm'])->name('showUserForm');
Route::get('/addUser', [CustomAuthController::class, 'addUser'])->name('addUser');
Route::get('/updateUser', [CustomAuthController::class, 'updateUser'])->name('updateUser');
Route::get('/editUser/{id}', [CustomAuthController::class, 'editUser'])->name('editUser');
Route::get('/deleteUser/{id?}', [CustomAuthController::class, 'deleteUser'])->name('deleteUser');
});
// dataUsers For admin panel functions
Route::prefix('dataUsers')->middleware('auth', 'App\Http\Middleware\IsAdminMiddleware')->group(function(){
Route::get('/getDataUsers', [CustomAuthController::class, 'getDataUsers'])->name('getDataUsers');
Route::get('/showDataUserForm', [CustomAuthController::class, 'showDataUserForm'])->name('showDataUserForm');
Route::get('/addDataUser', [CustomAuthController::class, 'addDataUser'])->name('addDataUser');
Route::get('/updateDataUser', [CustomAuthController::class, 'updateDataUser'])->name('updateDataUser');
Route::get('/editDataUser/{id}', [CustomAuthController::class, 'editDataUser'])->name('editDataUser');
Route::get('/deleteDataUser/{id?}', [CustomAuthController::class, 'deleteDataUser'])->name('deleteDataUser');
});
// contracts For admin panel functions
Route::prefix('contracts')->middleware('auth', 'App\Http\Middleware\IsAdminMiddleware')->group(function(){
Route::get('/getContracts', [ContractController::class, 'getContracts'])->name('getContracts');
Route::get('/getContractsDetail/{id}', [ContractController::class, 'getContractsDetail'])->name('getContractsDetail');
Route::get('/showContractForm', [ContractController::class, 'showContractForm'])->name('showContractForm');
Route::get('/addContract', [ContractController::class, 'addContract'])->name('addContract');
Route::get('/updateContract', [ContractController::class, 'updateContract'])->name('updateContract');
Route::get('/editContract/{id}', [ContractController::class, 'editContract'])->name('editContract');
Route::get('/deleteContract/{id?}', [ContractController::class, 'deleteContract'])->name('deleteContract');
});

// messages For admin panel functions
Route::prefix('messages')->middleware('auth', 'App\Http\Middleware\IsAdminMiddleware')->group(function(){
Route::get('/getMessages', [MessageController::class, 'getMessages'])->name('getMessages');
Route::get('/showMessageForm', [MessageController::class, 'showMessageForm'])->name('showMessageForm');
Route::get('/addMessage', [MessageController::class, 'addMessage'])->name('addMessage');
Route::get('/updateMessage', [MessageController::class, 'updateMessage'])->name('updateMessage');
Route::get('/editMessage/{id}', [MessageController::class, 'editMessage'])->name('editMessage');
Route::get('/deleteMessage/{id?}', [MessageController::class, 'deleteMessage'])->name('deleteMessage');
});
// Labour Details For Admin functions
Route::prefix('labourDetailsAdmin')->middleware('auth', 'App\Http\Middleware\IsAdminMiddleware')->group(function(){
Route::get('/updateWorker', [LabourDetailsController::class, 'updateWorkerAdmin'])->name('updateWorkerAdmin');
Route::get('/editWorker/{id}', [LabourDetailsController::class, 'editWorkerAdmin'])->name('editWorkerAdmin');
Route::get('/deleteWorker/{id?}', [LabourDetailsController::class, 'deleteWorkerAdmin'])->name('deleteWorkerAdmin');
});
// get all workers on admin panel
Route::get('getAllWorkers', [LabourDetailsController::class, 'getAllWorkers'])->name('getAllWorkers');
// Labour and metrial Details For user dashboard functions
Route::prefix('labourDetails')->middleware('auth')->group(function(){
Route::get('/getLabourDetails', [ContractController::class, 'getLabourDetails'])->name('getLabourDetails');
Route::get('/updataMatrialForm/{id}', [ContractController::class, 'updataMatrialForm'])->name('updataMatrialForm');
Route::get('/updataMatrialDetails', [ContractController::class, 'updataMatrialDetails'])->name('updataMatrialDetails');

Route::get('/showAddWorkerForm/{id}', [LabourDetailsController::class, 'showAddWorkerForm'])->name('showAddWorkerForm');
Route::get('/addWorker', [LabourDetailsController::class, 'addWorker'])->name('addWorker');
Route::get('/updateWorker', [LabourDetailsController::class, 'updateWorker'])->name('updateWorker');
Route::get('/editWorker/{id}', [LabourDetailsController::class, 'editWorker'])->name('editWorker');
Route::get('/deleteWorker/{id?}', [LabourDetailsController::class, 'deleteWorker'])->name('deleteWorker');
});

//for contract public
Route::post('contract',[ContractController::class,'request'])->name('contract');

//for message public
Route::post('message',[MessageController::class,'request'])->name('message');
// test routes
// Route::get('aside',function(){
//     return view('aside');
// });
// Route::get('siteDetails',function(){
//     return view('contracts.siteDetails');
// });
// Route::get('dataUserDashboard',function(){
//     return view('dataUsers.userDashboard.index');
// });
Route::get('/user/{id?}', function ($id) {
    return 'User '.$id;
});
