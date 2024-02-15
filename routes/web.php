<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ComicController;

Route :: get('/', [ComicController :: class, 'index' ]) -> name('users.index');

Route :: get('/comics/create', [ComicController :: class, 'create' ]) -> name('users.create');

Route :: post('/users', [ComicController :: class, 'store']) -> name('users.store');

Route :: get('/comics/{id}', [ComicController :: class, 'show' ]) -> name('users.show');