<?php


use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\Client\HomeController::class, 'home']);

Route::get('/list-new', [\App\Http\Controllers\Client\HomeController::class, 'listNew']);

Route::get('/tasks', function (){
        $tasks = [
            ['name' => 'Task 1'],
            ['name' => 'Task 2'],
            ['name' => 'Task 3'],
            ['name' => 'Task 4'],
        ];
        return view('tasks', ['tasks' => $tasks]);
});
