<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
    {
        $chirps = [
            [
                'author' => 'Afni',
                'message' => 'Halo dunia!',
                'time' => '1 menit lalu'
            ],
            [
                'author' => 'Budi',
                'message' => 'Laravel keren!',
                'time' => '5 menit lalu'
            ],
            [
                'author' => 'Siti',
                'message' => 'Belajar Laravel seru!',
                'time' => '10 menit lalu'
            ],
        ];

        return view('welcome', ['chirps' => $chirps]);
    }
}