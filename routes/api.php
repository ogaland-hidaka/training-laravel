<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\PostApi;
use App\Http\Controllers\API\CommentApi;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

/** level01 Step05 START */
// // postに対するルーティング
// Route::get('/training/posts', 'API\PostApi@index');
// Route::get('/training/posts/{postId}', 'API\PostApi@show');
// Route::post('/training/posts', 'API\PostApi@create');
// Route::put('/training/posts/{postId}', 'API\PostApi@update');
// Route::delete('/training/posts/{postId}', 'API\PostApi@delete');

// // commentに対するルーティング
// Route::get('/training/posts/{postId}/comments', 'API\CommentApi@index');
// Route::get('/training/posts/{postId}/comments/{commentId}', 'API\CommentApi@show');
// Route::post('/training/posts/{postId}/comments', 'API\CommentApi@create');
// Route::put('/training/posts/{postId}/comments/{commentId}', 'API\CommentApi@update');
// Route::delete('/training/posts/{postId}/comments/{commentId}', 'API\CommentApi@delete');
/** level01 Step05 END */

/** level01 Step06 START */
Route::prefix('training/posts')->group(function () {
    // PostlApi
    Route::get('/', [PostApi::class, 'index']);
    Route::get('/{postId}', [PostApi::class, 'show']);
    Route::post('/', [PostApi::class, 'create']);
    Route::put('/{postId}', [PostApi::class, 'update']);
    Route::delete('/{postId}', [PostApi::class, 'delete']);

    // CommentlApi
    Route::get('/{postId}/comments', [CommentApi::class, 'index']);
    Route::get('/{postId}/comments/{commentId}', [CommentApi::class, 'show']);
    Route::post('/{postId}/comments', [CommentApi::class, 'create']);
    Route::put('/{postId}/comments/{commentId}', [CommentApi::class, 'update']);
    Route::delete('/{postId}/comments/{commentId}', [CommentApi::class, 'delete']);
});
/** level01 Step06 END */