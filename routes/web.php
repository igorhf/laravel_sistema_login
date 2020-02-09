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

Route::get('/', 'usuariosController@login');
Route::post('realizar_login','usuariosController@realizarLogin');

Route::get('cadastro_usuario', 'cadastroController@cadastroUsuario');
Route::post('realizar_cadastro', 'cadastroController@realizarCadastro');

Route::get('deslogar', 'deslogarController@deslogar');

Route::get('recuperar_senha', 'emailController@email');
Route::post('email_recuperacao', 'emailController@emailRecuperacao');