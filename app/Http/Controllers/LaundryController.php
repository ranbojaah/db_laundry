<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LaundryController;

class LaundryController extends Controller
{
    public function paket(){
        $get ['paket'] = DB::select('CALL paket_outlet()');
        return view('paket',$get);
    }

    public function transaksi(){
        $get ['transaksi'] = DB::select('CALL transaksi');
        return view('transaksi',$get);
    }
}
