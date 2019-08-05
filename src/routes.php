<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('add/{a}/{b}', 'Devjay\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Devjay\Calculator\CalculatorController@subtract');
