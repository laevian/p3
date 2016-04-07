<?php

  Route::get('/', 'DBFController@getIndex');
  Route::get('/lorem', 'DBFController@getLorem');
  Route::get('/lorem/create', 'DBFController@getParagraphs');
  Route::get('/usergen', 'DBFController@getUserGen');
  Route::get('/usergen/{numUsers}', 'DBFController@getUsers');
  Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
