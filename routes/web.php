<?php

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

/* 
Route::get('/test', function () {
    return view('test', [
        'name' => request('name')
    ]);
});
 */

/*
Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first-post' => 'Hello, this is my first blog post',
        'my-second-post' => 'Now I am getting somewhere with this code'
    ];

    if (!array_key_exists($post, $posts)) {
        abort(404, 'Sorry, that post was not found');
    }

    return view('post', [
        'post' => $posts[$post]
    ]);
});
 */

Route::get('/posts/{post}', 'PostsController@show');
 
Route::get('/',  function () {
    return view('welcome');
});
 
Route::get('/about',  function () {

    // return App\Article::take(2)->get();
    // return App\Article::all();
    // return App\Article::paginate(2);
    return view('about', [
            'articles' => App\Article::latest()->take(3)->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');
