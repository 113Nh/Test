<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; 

/*
|--------------------------------------------------------------------------
@@ -13,6 +14,6 @@
|
*/
Route::get('/', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class ,'show']);
?>