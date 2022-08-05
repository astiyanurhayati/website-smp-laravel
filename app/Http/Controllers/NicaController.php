<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NicaController extends Controller
{
    public function home(){
        return view('pages.home',[
            'title' => 'HOME'
        ]);
        
    }

    public function info(){
        return view('pages.info',[
            'title' => 'INFO LENGKAP'
        ]);
    }

    public function sejarah(){
        return view('pages.sejarah', [
            'title' => 'SEJARAH'
        ]);
    }

    public function eskul(){
        return view('pages.eskul', [
            'title' => 'EKSTRAKULIKULER'
        ]);
    }

    public function literasi(){
        return view('pages.literasi', [
            'title' => 'KEGIATAN LITERASI'
        ]);
    }
    

    public function contact(){
        return view('pages.contact', [
            'title' => 'CONTACT'
        ]);
    }


}
