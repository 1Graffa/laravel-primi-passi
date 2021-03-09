<?php

use Illuminate\Support\Facades\Route;

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
    $data = [
        'cartoni' => [
            [
            'gatto' => 'Tom',
            'topo'  => 'Jerry',
            'img'   => 'https://upload.wikimedia.org/wikipedia/it/b/b8/Tom_e_Jerry_Tales.png'
            ],
            [
            'gatto' => 'Grattachecca',
            'topo'  => 'Fighetto',
            'img'   => 'https://static.wikia.nocookie.net/simpsons/images/4/4e/The_Itchy_and_Scratchy_Show.png/revision/latest?cb=20130920065306'
            ]
        ]
    ];
    return view('primi-passi',$data);
});
Route::get('/prova', function () {
    return view('prova');
});
