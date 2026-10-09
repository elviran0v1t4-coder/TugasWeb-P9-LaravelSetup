<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        $data = [
            'nama' => 'Tugas Web Pertemuan 9',
            'prodi' => 'Ilmu Komputer',
            'teknologi' => 'Laravel'
        ];

        return view('about', compact('data'));
    }

    public function contact()
    {
        $kontak = [
            'email' => 'elvira.4253250038@mhs.unimed.ac.id',
            'instagram' => '@elvranov'
        ];

        return view('contact', compact('kontak'));
    }
}