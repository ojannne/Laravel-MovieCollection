<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function dataSantri(){
        $mhs1 = 'Fawwaz'; $asal1 = 'Jakarta';
        $mhs2 = 'Inaya'; $asal2 = 'Jombang';
        return view('data_santri', 
            compact('mhs1','mhs2','asal1','asal2')
        );
    }
}
