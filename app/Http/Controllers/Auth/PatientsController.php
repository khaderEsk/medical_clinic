<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PatientsController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::with('wallet')->get();
        return view('auth.allPatients', compact('patients'));
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
    public function addPatients()
    {
        return view('auth.addPatients');
    }
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'account' => 'required',
            'description' => 'required'
        ];

        $message = [];
        $v = Validator::make($request->all(), $rules, $message);
        if ($v->fails()) {
            return $v->errors();
        }
        $pa = Patient::create([
            'name' => $request->name,
            'address' => $request->address,
            'phone' => $request->phone,
            'description' => $request->description,

        ]);
        Wallet::query()->create([
            'user_id' => $pa->id,
            'account' => $request->account
        ]);
        // $request->session()->flash('Success', 'Store Sucssefully Student');
        return redirect('/goodAddPatient');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pat = Patient::find($id);
        if ($pat) {
            $wa = $pat->wallet;
            $Des = $pat->description();

            return view('auth.infoPatients', compact(['pat', 'wa', 'Des']));
        }
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
    public function destroy(Request $request, $id)
    {
        $pat = Patient::findOrFail($id);
        //first delete user
        $pat->delete();

        //second delete teacher room
        $pat->delete();
        // $request->session()->flash('Success', 'Deleted Sucssefully Student');
        return redirect('/goodDeletePatient');
    }
}
