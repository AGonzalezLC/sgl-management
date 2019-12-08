<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function listarPdf(){
        $pdf = \PDF::loadView('pdf.mediciones',['cont'=>1]);
        return $pdf->download('mediciones.pdf');
    }
}
