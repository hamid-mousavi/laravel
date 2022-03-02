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

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Article;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*$person=DB::table('person')->orderBy('name','desc')->where('name','soheila')->get();
$person2=DB::table('person')->insert([
    'name'=>'Mansoor',
    'family'=>'Tohami'
]);
$person2=DB::table('person')->get();
dd($person);
dd($person2);*/

Route::prefix('admin')->group(function (){
    Route::get('/', function (){
        return view('admin.index');
    });
    Route::get('/article',function (){
        return view('admin.pages.tables.table',[
            'article'=>Article::all()
        ]);
    });
    Route::get('/article/add', function (){
        return view('admin.pages.forms.form');
    });
});



Route::get('/about',function (){
    return view('about',['title'=>'about']);
});
Route::get('/contact', function (){
    return view('contact',['title'=>'contact']);
});




/*Route::get('/articles/{article}',function ($article){


    return view('hamid',[
        'title' =>$article,
        'description'=>[
            'hamid',
            'mousavi'
        ]

    ]);
});*/
