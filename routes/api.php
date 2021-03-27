<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Post;


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

Route::get('/testing-the-api',function(){
    return ['message' => 'hello'];
});

// CRUD 
// 1. get all (GET) /api/posts
// 2. create a post (POST) /api/posts
// 3. get a single (GET) /api/post/{id}
// 4. update a single (PUT/PATH) /api/post/{id}
// 5. delete (DELETE) /api/post/{id}
/*
Route::get('/post',function(){
  $post = Post::create([
      'title' => 'my first post',
      'slug' => 'my first post'
  ]);

  return $post;
});*/

// Route::get('/post','PostController@index');
// Route::post('/post','PostController@store');
// Route::put('/post','PostController@update');
// Route::delete('/post','PostController@destroy');

Route::prefix('v1')->group(function(){
    Route::resource('posts','PostController');
});





Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
