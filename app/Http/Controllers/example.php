<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;
use PDF;

class example extends Controller
{
    /* 
    ========================
    || Example Controller ||
    ========================
    || helloWorld         ||
    || exportPDF          ||
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

    #| example export PDF
    public function exportPDF()
    {
        # deklarasi variable
        $data = [];
        $faker = Faker::create();

        # membuat data dummy
        for ($i = 0; $i < 20; $i++) {
            $people = (Object) [
                "id" => $i,
                "name" => $faker->name,
                "address" => $faker->address,
                "email" => $faker->email,
                "company" => $faker->company
            ];

            array_push($data, $people);
        }

        # jadikan 1 variable data

        $global = [
            "data" => $data
        ];

        $pdf = PDF::loadView('tableView', $global);

        //Aktifkan Local File Access supaya bisa pakai file external ( cth File .CSS )
        $pdf->setOption('enable-local-file-access', true);

        // Stream untuk menampilkan tampilan PDF pada browser
        return $pdf->stream('table.pdf');

        // Jika ingin langsung download (tanpai melihat tampilannya terlebih dahulu) kalian bisa pakai fungsi download
        // return $pdf->download('table.pdf);

      
    }
    #| end example
}
