<?php

Route::get('/', 'Controller@welcome');

Route::get('about', 'Controller@about');

Route::get('books', 'Controller@books');

Route::get('books/{slug}', 'Controller@book');

Route::get('now', 'Controller@now');
