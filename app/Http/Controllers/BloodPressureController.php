<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\BloodPressure;
use Illuminate\Support\Facades\Session;

class BloodPressureController extends Controller
{

    /**
     * Show the form for creating a new resource.
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function create(Patient $patient)
    {
        return view( 'bloodpressure.create',compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'SBP' => ['required', 'max:4'],
            'DBP' => ['required', 'max:4'],
            'patient_id' => ['required'],
        ]);

        $bpr = BloodPressure::create([
            'SBP' => $request->SBP,
            'DBP' => $request->DBP,
            'patient_id' => $request->patient_id
        ]);

        Session::flash('message', 'Record Added');
        Session::flash('style', 'bg-green-100 border border-green-400 text-green-700');

        return redirect()->route('patients.index');
    }


}
