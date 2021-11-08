<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\oneController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\NewsController;

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
    return view('signup');
});
route::get('login', [oneController::class, 'show']);
route::post('signup', [oneController::class, 'create']);
route::get('loginn', [oneController::class, 'show']);
route::get('logout', function (){
    if(session()->has('email')){
        session()->pull('email', null);
        return redirect('login');
        
    }
    // session()->pull('email', null);
    // return redirect('login');
});
route::post('NewsWorld',[oneController::class, 'entryto']);
route::view('welcome','welcome');
// route::get('news', [oneController::class, 'news']);


// news routes 
route::get('news-india',[NewsController::class,'news']);
route::get('news2-Australia',[NewsController::class,'news2']);
route::get('news3-HongKong',[NewsController::class,'news3']);
route::get('news4-US',[NewsController::class,'news4']);
route::get('news5-canada',[NewsController::class,'news5']);
route::get('news6-germany',[NewsController::class,'news6']);
route::get('news7-japan',[NewsController::class,'news7']);
route::get('news8-mexico',[NewsController::class,'news8']);



// contact page 
route::post('contacts',[oneController::class,'data1']);
route::view('contact', 'contact');

// about page 
route::view('AboutUs', 'About');