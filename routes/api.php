<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

#
#|--------------------------------------------------------------------------
#| API Parent Routes
#|--------------------------------------------------------------------------
#|
#| File ini digunakan untuk Parent Route , Anda bisa menambahkan 
#| Child route dengan cara menambakan prefix seperti contoh dibawah ini.
#| secara default Anda telah disediakan JWT untuk validasi token,
#| Anda dapat mengubah konfigurasi JWT pada folder app/Http/Middleware.
#|
#


# Route::middleware(['jwtfun'])->group(function () {

# EXAMPLE
Route::prefix('example')->group(base_path('routes/example.php'));
# END EXAMPLE

# });