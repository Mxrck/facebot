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

Route::post('/subscribe', ['as' => 'subscribe', 'uses' => 'SubscribersController@store']);

Route::get('/token', 'VerificationController@create');

Route::post('/token', 'CallbackController@create');

Auth::routes();

Route::get('/profile', ['as' => 'profile', 'uses' => function()
{
    return view('auth.update');
}]);

Route::put('/profile', ['as' => 'profile.update', 'uses' => 'Auth\UpdateCredentialsController@update']);

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

Route::get('/', ['as' => 'welcome', 'uses' => function()
{
    return view('welcome');
}]);

Route::group(['middleware' => 'auth'], function()
{
    Route::get('/messages', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);
    Route::get('/messages/show/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::delete('/messages/delete/{id}', ['as' => 'messages.delete', 'uses' => 'MessagesController@destroy']);

    Route::get('/recipients', ['as' => 'recipients.index', 'uses' => 'RecipientsController@index']);
    Route::get('/recipients/show/{id}', ['as' => 'recipients.show', 'uses' => 'RecipientsController@show']);
    Route::delete('/recipients/delete/{id}', ['as' => 'recipients.delete', 'uses' => 'RecipientsController@destroy']);

    Route::get('/rules', ['as' => 'rules.index', 'uses' => 'RulesController@index']);
    Route::get('/rules/create', ['as' => 'rules.create', 'uses' => 'RulesController@create']);
    Route::post('/rules/store', ['as' => 'rules.store', 'uses' => 'RulesController@store']);
    Route::get('/rules/edit/{id}', ['as' => 'rules.edit', 'uses' => 'RulesController@edit']);
    Route::get('/rules/show/{id}', ['as' => 'rules.show', 'uses' => 'RulesController@show']);
    Route::put('/rules/update/{id}', ['as' => 'rules.update', 'uses' => 'RulesController@update']);
    Route::delete('/rules/delete/{id}', ['as' => 'rules.delete', 'uses' => 'RulesController@destroy']);

    Route::get('/answers', ['as' => 'answers.index', 'uses' => 'AnswersController@index']);
    Route::get('/answers/create', ['as' => 'answers.create', 'uses' => 'AnswersController@create']);
    Route::post('/answers/store', ['as' => 'answers.store', 'uses' => 'AnswersController@store']);
    Route::get('/answers/edit/{id}', ['as' => 'answers.edit', 'uses' => 'AnswersController@edit']);
    Route::get('/answers/show/{id}', ['as' => 'answers.show', 'uses' => 'AnswersController@show']);
    Route::put('/answers/update/{id}', ['as' => 'answers.update', 'uses' => 'AnswersController@update']);
    Route::delete('/answers/delete/{id}', ['as' => 'answers.delete', 'uses' => 'AnswersController@destroy']);

    Route::get('/expressions', ['as' => 'expressions.index', 'uses' => 'ExpressionsController@index']);
    Route::get('/expressions/create', ['as' => 'expressions.create', 'uses' => 'ExpressionsController@create']);
    Route::post('/expressions/store', ['as' => 'expressions.store', 'uses' => 'ExpressionsController@store']);
    Route::get('/expressions/edit/{id}', ['as' => 'expressions.edit', 'uses' => 'ExpressionsController@edit']);
    Route::get('/expressions/show/{id}', ['as' => 'expressions.show', 'uses' => 'ExpressionsController@show']);
    Route::put('/expressions/update/{id}', ['as' => 'expressions.update', 'uses' => 'ExpressionsController@update']);
    Route::delete('/expressions/delete/{id}', ['as' => 'expressions.delete', 'uses' => 'ExpressionsController@destroy']);

    Route::get('/resources', ['as' => 'resources.index', 'uses' => 'ResourcesController@index']);
    Route::get('/resources/create', ['as' => 'resources.create', 'uses' => 'ResourcesController@create']);
    Route::post('/resources/store', ['as' => 'resources.store', 'uses' => 'ResourcesController@store']);
    Route::get('/resources/edit/{id}', ['as' => 'resources.edit', 'uses' => 'ResourcesController@edit']);
    Route::get('/resources/show/{id}', ['as' => 'resources.show', 'uses' => 'ResourcesController@show']);
    Route::put('/resources/update/{id}', ['as' => 'resources.update', 'uses' => 'ResourcesController@update']);
    Route::delete('/resources/delete/{id}', ['as' => 'resources.delete', 'uses' => 'ResourcesController@destroy']);

    Route::get('/configuration', ['as' => 'configuration.index', 'uses' => 'ConfigurationController@index']);
    Route::put('/configuration/update', ['as' => 'configuration.update', 'uses' => 'ConfigurationController@update']);
});

