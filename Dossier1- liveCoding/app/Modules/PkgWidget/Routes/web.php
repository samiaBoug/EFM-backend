<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;
use Modules\PkgWidget\Controllers\WidgetController ;


Auth::routes();



Route::post('/widget/execute', [WidgetController::class, 'executeMethod'])->name('widget.execute');
Route::get('/', function(){
  return view('pkgWidget::test');
});



