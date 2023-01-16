<?php

use App\Http\Controllers\example;
use Illuminate\Support\Facades\Route;

#
#|----------------------------------------------------------------
#| API Child Routes
#|----------------------------------------------------------------
#|
#| File ini digunakan untuk Child Routes, Anda bisa menambahkan 
#| Route CRUD seperti contoh dibawah ini.
#|
#

# HELLOWORLD
Route::get('helloWorld',[example::class, 'helloWorld']);
# END HELLOWORLD