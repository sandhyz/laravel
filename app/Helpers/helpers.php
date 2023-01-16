<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


#
#|----------------------------------------------------------------
#| Helpers
#|----------------------------------------------------------------
#|
#| Anda dapat menambahkan Helper dari file ini, tujuannya agar
#| mempermudah dan merapihkan code. 
#|
#


# RESJSON

#| Response JSON (resJSON) berfungsi untuk merapihkan code response
#| secara default function ini memiliki 4 parameter diantaranya :
#| 1. status berisikan boolean true/false (1/0)
#| 2. message berisikan pesan yang akan diberikan
#| 3. data berisikan return data yang akan diberikan 
#| 4. code berisikan kode HTTP

if (!function_exists('resJSON')) {
    function resJSON($status, $message, $data, $code)
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data,
        ], $code);
    }
}

# END RESJSON