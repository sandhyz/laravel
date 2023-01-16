<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class example extends Controller
{
    /* 
    ========================
    || Example Controller ||
    ========================
    || helloWorld         ||
    ||                    ||
    ========================
    */

    #| example hello world API
    public function helloWorld()
    {
        # deklarasi variable
        $data = 'Hello World!';

        # return response JSON
        # Anda dapat melihat/menambahkan parameter yang diperlukan dengan cara
        # CTRL + click pada function "resJSON"
        return resJSON(1, 'Get Data Successfully!', $data, 200);
    }
    #| end example
}
