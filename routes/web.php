<?php

use App\Http\Controllers\inventaris\CalegController;
use App\Http\Controllers\inventaris\KelurahanController;
use App\Http\Controllers\inventaris\PartaiController;
use App\Http\Controllers\team\HasilSuaraController;
use App\Http\Controllers\team\KoordTeamController;
use App\Http\Controllers\team\RelawanController;
use App\Http\Controllers\team\TeamRelawanController;
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
    return view('welcome');
});

//---------------------------------------------------------- INVENTARIS -------------------------------------------------------//

 Route::get('/',[PartaiController::class, 'index'] )->name('index');

//------------------- PARTAI -----------------//
 // insert
 Route::get('/partai-create',[PartaiController::class, 'data'] )->name('data');
 Route::post('/createP',[PartaiController::class, 'store'] )->name('createP');

 //get 
 Route::get('/partai',[PartaiController::class, 'partai'] )->name('partai');

 //update 
 Route::get('/partai-update/{id}',[PartaiController::class, 'dataupdateP'] )->name('dataupdateP');
 Route::put('/updateP/{id}',[PartaiController::class, 'updateP'] )->name('updateP');

 //delete
 Route::get('/deleteP/{id}',[PartaiController::class, 'deleteP'] )->name('deleteP');


 //------------------- CALEG -----------------//

 Route::get('/caleg-create',[CalegController::class, 'caleg'] )->name('caleg');
 //insert data caleg
 Route::post('/createC',[CalegController::class, 'storeC'] )->name('createC');
 //get data caleg
 Route::get('/caleg',[CalegController::class, 'calegs'] )->name('calegs');

 //update
 Route::get('/caleg-update/{id}',[CalegController::class, 'dataupdateC'] )->name('dataupdateC');
 Route::post('/updateC/{id}',[CalegController::class, 'updateC'] )->name('updateC');

 //delete
Route::get('/delete/{id}',[CalegController::class, 'deleteC'] )->name('deleteC');



//------------------- KELURAHAN -----------------//
Route::get('/kelurahan',[KelurahanController::class, 'kelurahan'] )->name('kelurahan');

//insert data
Route::post('/createK',[KelurahanController::class, 'storeK'] )->name('createK');
Route::get('/kelurahan-create',[KelurahanController::class, 'dataK'] )->name('kelurahan-create');

//update
Route::get('/kelurahan-update/{id}',[KelurahanController::class, 'updateKelurahan'] )->name('updateKelurahan');
Route::post('/updatek/{id}',[KelurahanController::class, 'udpateK'] )->name('updateK');

//Delete
Route::get('/deleteK/{id}',[KelurahanController::class, 'deleteK'] )->name('deleteK');


//---------------------------------------------------------- TEAM -------------------------------------------------------//


//------------------- RELAWAN-TEAM -----------------//
Route::get('/teamRelawan',[TeamRelawanController::class, 'teamRelawan'] )->name('teamrelawan');

//insert data
Route::get('/teamRelawan-create',[TeamRelawanController::class, 'dataTR'] )->name('relawan-create');
Route::post('/createTR',[TeamRelawanController::class, 'storeTR'] )->name('createTR');

//update data
Route::get('/teamRelawan-update/{id}',[TeamRelawanController::class, 'updateRelawanteam'] )->name('updateRelawanteam');
Route::post('/udpateTR/{id}',[TeamRelawanController::class, 'udpateTR'] )->name('udpateTR');

//Delete data
Route::get('/deleteTR/{id}',[TeamRelawanController::class, 'deleteTR'] )->name('deleteTR');



//------------------- KOORDINATOR-TEAM -----------------//
Route::get('/koordinatorTeam',[KoordTeamController::class, 'KoodTeam'] )->name('koordinatorTeam');

//insert data
Route::get('/koordinatorTeam-create',[KoordTeamController::class, 'dataKT'] )->name('createkoordTeam');
Route::post('/createKT',[KoordTeamController::class, 'storeKT'] )->name('createKT');

//update data
Route::get('/koordinatorTeam-update/{id}',[KoordTeamController::class, 'updateKoord_team'] )->name('updatekoordTeam');
Route::post('/udpateKT/{id}',[KoordTeamController::class, 'udpateKT'] )->name('udpateKT');

//Delete data
Route::get('/deleteKT/{id}',[KoordTeamController::class, 'deleteKT'] )->name('deleteKT');


//----------------------- RELAWAN ----------------------//

Route::get('/relawan',[RelawanController::class, 'relawan'] )->name('relawan');

//insert data
Route::get('/relawan-create',[RelawanController::class, 'createRelawan'] )->name('createRelawan');
Route::post('/createR',[RelawanController::class, 'storeR'] )->name('createR');

//update data
Route::get('/relawan-update/{id}',[RelawanController::class, 'updateRelawan'] )->name('updateRelawan');
Route::post('/updateR/{id}',[RelawanController::class, 'udpateR'] )->name('udpateR');

//Delete data
Route::get('/deleteR/{id}',[RelawanController::class, 'deleteR'] )->name('deleteR');


//----------------------- HASIL SUARA ----------------------//

Route::get('/hasilsuara',[HasilSuaraController::class, 'hasilsuara'] )->name('hasilsuara');

//insert data
Route::get('/hasilsuara-create',[HasilSuaraController::class, 'createHsuara'] )->name('createHsuara');
Route::post('/createHR',[HasilSuaraController::class, 'storeHR'] )->name('createHR');

//update data
Route::get('/hasilsuara-update/{id}',[HasilSuaraController::class, 'updateHsuara'] )->name('updateHsuara');
Route::post('/updateHS/{id}',[HasilSuaraController::class, 'updateHS'] )->name('updateHS');













