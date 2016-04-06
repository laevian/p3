<?php

  Route::get('/', 'DBFController@getIndex');
  Route::get('/lorem', 'DBFController@getLorem');
  Route::get('/lorem/create', 'DBFController@getParagraphs');
  Route::get('/usergen', 'DBFController@getUserGen');
  Route::get('/usergen/{numUsers}', 'DBFController@getUsers');
