<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Naif\Chatgpt\Http\Controllers\ChatGPTController;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

Route::post('/ask', [ChatGPTController::class, 'ask']);
Route::get('/history', [ChatGPTController::class, 'history']);
Route::get('/history/view/{id}', [ChatGPTController::class, 'view']);
Route::post('/history/delete', [ChatGPTController::class, 'delete']);
