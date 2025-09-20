<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller

{
    public function profile($NAMA = "", $KELAS = "", $NPM = "") {  
        $data = [
            'NAMA' => $NAMA,
            'KELAS' => $KELAS,
            'NPM' => $NPM
        ];
        return view('profile', $data);  
    }
}