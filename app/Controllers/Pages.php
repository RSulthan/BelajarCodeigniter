<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebProgrammingUNPAS',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Gondosuli No. 2',
                    'kota' => 'Malang',
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Bandung No. 7C',
                    'kota' => 'Malang',
                ]
            ]
        ];

        return view('pages/contact', $data);
    }

    public function testing($nama = '', $umur = 0)
    {
        echo "Nama Saya $nama, berumur $umur";
    }
}
