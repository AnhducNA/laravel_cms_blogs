<?php


use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/role/default', function (){
    $nowTime = Carbon\Carbon::now()->toDateTimeString();
    $role_data = ['id' => 0, 'name'=> 'guest', 'created_at'=> $nowTime, 'updated_at'=>$nowTime];
    $role = new \App\Models\Role($role_data);
    $role->save();
});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});
// User & Profile...
Route::get('/user/profile', [\App\Http\Controllers\Admin\UserProfileController::class, 'show'])
    ->name('profile.show');
