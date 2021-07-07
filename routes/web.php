<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Category;
use App\Models\Budget;
use App\Models\Ledger;
use App\Http\Controllers\RegisterController;

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
    return view('home');
});

Route::get('register', [RegisterController::class, 'create']);

Route::post('register', [RegisterController::class, 'store']);

Route::get('budgets/{user:username}', function (User $user) {
    return view('budgets', ['budgets' => $user->budgets]);
});

Route::get('new', function () {
    $categories = Category::all();
    return view('new', ['categories' => $categories]);
});
