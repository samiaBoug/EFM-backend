<?php

use Illuminate\Support\Facades\Route;
use Modules\PkgWidget\Controllers\RuleController ;
use Modules\PkgWidget\Controllers\WidgetController;

Route::get('/', function () {
    return view('pkgWidget::test');
});
Route::post('/excute', [WidgetController::class , 'excute'])->name('excute');
Route::get('/prototype', [RuleController::class, 'showPrototype'] 
);