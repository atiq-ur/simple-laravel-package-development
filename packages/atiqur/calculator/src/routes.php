<?php

use Atiq\Calculator\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

Route::get('/calculator', function(){
    echo 'Hello from the calculator package!';
});

Route::get('/add/{a}/{b}', [CalculatorController::class, 'add']);
Route::get('/subtract/{a}/{b}', [CalculatorController::class, 'subtract']);
Route::get('/load-facade', [CalculatorController::class, 'loadFacadeInfo']);

Route::get('facades-cal', function (){
   \Atiq\Calculator\Facades\CalculatorFacade::index();
});
