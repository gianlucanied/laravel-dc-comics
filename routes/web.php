<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FumettoController;

Route :: get('/fumettos', [FumettoController :: class, 'index' ]) -> name('fumettos.index');

Route :: get('/fumettos/create', [FumettoController :: class, 'create' ]) -> name('fumettos.create');

Route :: post('/fumettos', [FumettoController :: class, 'store']) -> name('fumettos.store');

Route :: get('/fumettos/{id}', [FumettoController :: class, 'show' ]) -> name('fumettos.show');

Route :: delete('/fumettos/{id}', [FumettoController :: class, 'destroy'])
->name('fumettos.destroy');

Route :: get('/fumettos/{id}/edit', [FumettoController :: class, 'edit'])
-> name ('fumettos.edit');

Route :: put('/fumettos/{id}', [FumettoController :: class, 'update'])
-> name('fumettos.update');