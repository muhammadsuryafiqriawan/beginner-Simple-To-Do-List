<?php

use Illuminate\Support\Facades\Route;
// Import ToDoController
use App\Http\Controllers\ToDoController;

Route::get('/', function () {
    return view('welcome');
});

// Redirect root to To-Do index
Route::get('/', function () {
    // Redirect to the To-Do index page
    return redirect()->route('todos.index');
});
// Resource routes for To-Do operations
Route::resource('todos', ToDoController::class);
// Additional route to toggle completion status
Route::post('todos/{todo}/toggle', [ToDoController::class, 'toggle'])->name('todos.toggle');
