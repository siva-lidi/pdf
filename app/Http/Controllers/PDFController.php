<?php

namespace App\Http\Controllers;

use App\Models\Outpatient;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function generatePdf(Request $request){
        $data=[
            'title'=>'Patients Report',
            'date'=>date('y/m/d'),
            'patients'=>$request->patients,
        ];
        $pdf=Pdf::loadView('PDF',$data);
        return $pdf->download('patients.pdf');
    }
}
