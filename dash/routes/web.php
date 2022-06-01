<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['as'=>'site.home', 'uses'=>'site\homeController@index']);

Route::get('/login', ['as'=>'site.login', 'uses'=>'site\loginController@index']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses'=>'site\loginController@sair']);
Route::post('/login/entrar', ['as'=>'site.login.entrar', 'uses'=>'site\loginController@entrar']);

route::group(['middleware'=>'auth'], function(){
    Route::get('/admin/cursos', ['as'=>'admin.cursos', 'uses'=>'Admin\cursoController@index']);
    Route::get('/admin/cursos/adicionar', ['as'=>'admin.cursos.adicionar', 'uses'=>'Admin\cursoController@adicionar']);
    Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar', 'uses'=>'Admin\cursoController@salvar']);
    Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar', 'uses'=>'Admin\cursoController@editar']);
    Route::put('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar', 'uses'=>'Admin\cursoController@atualizar']);
    Route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar', 'uses'=>'Admin\cursoController@deletar']);
});