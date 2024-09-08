<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    // public function profile(){
    //     return view('profile');
    // }

    // public function profile()
    // {
    //     $data = [
    //         'nama' => 'Mutiara Cintia Rainy',
    //         'kelas' => 'B',
    //         'npm' => '2217051100'
    //     ];
    //     return view('profile', $data);
    // }

    public function profile($nama= "", $kelas= "", $npm="")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm
        ];
        return view('profile', $data);
    }
}
