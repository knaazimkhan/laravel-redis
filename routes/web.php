<?php

use App\User;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redis;

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
    // DB::connection()->enableQueryLog();
    // $users_cache = Cache::remember('users', 1, function () {
    //     return User::all()->take(5);
    // });
    // $log = DB::getQueryLog();
    // print_r($log);
    // return $users_cache;
    return view('welcome');
    // $redis = app()->make('redis');
    // $redis->set('name', 'Naazim Khan');
    // return $redis->get('name');
    // $id = 1;
    // $storage = Redis::connection();
    // $view = $storage->incr('viewCount:' .$id. ':views' );
    // return 'This is an artical with id: '.$id. ' it has '.$view. ' view';
});
