<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function pdf() {
        $pdf = PDF::loadView('pages.pdf2');
    
        return $pdf->download('codesolutionstuff.pdf');
        // return view('pages.pdf1');
    }
    public function pdfTest() {
  

        return view('pages.pdf2');
    }
}
