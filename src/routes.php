<?php

Route::get('j/calculator', function(){
	echo 'Hello from the calculator package!';
});
Route::get('j/add/{a}/{b}', 'Devjay\Calculator\CalculatorController@add');
Route::get('j/subtract/{a}/{b}', 'Devjay\Calculator\CalculatorController@subtract');