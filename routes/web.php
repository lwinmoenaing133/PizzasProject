<?php

use App\Http\Controllers\PizzaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get("/",[PizzaController::class,"index"])->name("home");
Route::post("/",[PizzaController::class,"insert"])->name("insert");
Route::middleware(['auth:sanctum', 'verified'])->get("/pizzas",[PizzaController::class,"pizza"])->name("pizzas");
Route::get("/pizzas/{id}",[PizzaController::class,"delete"])->name("delete");
Route::get("/pizzas/edit/{id}",[PizzaController::class,"edit"])->name("edit");
Route::post("/pizzas/update/{id}",[PizzaController::class,"update"])->name("update");
Route::get("/logout",function(){
    Auth::logout();
    return redirect()->route("login");
})->name("logout");

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->name('dashboard');
