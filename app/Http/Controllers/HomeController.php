<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="DATA KRAMA ADAT TEMUKUS";
        $data['krama']=array(
        'nama'=>'PUTU KARTINI',
        'jabatan'=>'KRAMA',
        'keterangan'=>'NYADA'
        );
    
        return view ('admin.beranda',compact('title','data'));
    }
    public function dasboard(){
        $title="Data Dasboard";
        
        return view ('admin.dasboard',compact('title'));  
    }
}
