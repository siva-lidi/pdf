<?php

namespace App\Http\Controllers;

use App\Models\Outpatient;
use Illuminate\Http\Request;

class OutpatientController extends Controller
{
    public function index(){
        return view('patient.index');
    }

    public function get(Request $request){
        if ($request->gender) {
            $patients=Outpatient::where('gender',$request->gender)->get();
            return view('patient.show',compact('patients'));         
        }elseif($request->age){
            $patients=Outpatient::where('age',$request->age)->get();
            return view('patient.show',compact('patients'));         
        }elseif($request->martial){
            $patients=Outpatient::where('martial',$request->martial)->get();
            return view('patient.show',compact('patients'));         
        }
    }
}
