<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

require __DIR__ . "/auth.php";

Route::middleware(["auth:admin_users", "verified"])->group(function () {
    Route::get("/", [DashboardController::class, "index"])->name("dashboard");
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit",
    );
    Route::patch('profile', [ProfileController::class, 'update'])->name('profile.update');


    Route::resource('admin-users', AdminUserController::class);
    Route::get('admin-users-data', [AdminUserController::class, 'getAdminUsers'])->name('admin-user-data');
});

// Route::middleware('auth:admin_users')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::get("test", function () {
    return view("home");
});
