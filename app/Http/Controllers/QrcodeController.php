<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Placa;

class QrcodeController extends Controller
{
    public function index(){
        QrCode::generate('HOLA BUENOS DIASS!');
        return view('view_qr_code');
    }
}
