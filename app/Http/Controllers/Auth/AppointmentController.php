<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => 'required',
            'date' => 'required',
            'time' => 'required',

        ];
        $message = [];
        $v = Validator::make($request->all(), $rules, $message);
        if ($v->fails()) {
            return $v->errors();
        }
        $now = Carbon::now();
        Appointment::create([
            'user_id' => $request->user_id,
            'date' => $request->date,
            'time' => $request->time
        ]);

        return redirect('/getPatient');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $appointment = Appointment::where('user_id', $id)->get();
        
        return view('auth.appointment', compact(['appointment']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
