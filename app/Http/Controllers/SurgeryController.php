<?php

namespace App\Http\Controllers;

use App\Models\Surgery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function surgery_list()
    {
        return view('admin.surgeries',['surgeries'=>Surgery::with('beneficiary')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.forms.surgeries_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $validated = $request->validate([
            'beneficiary_id'=>'required|string',
            'surgeon_name'=>'required|string',
            'procedure_name'=>'required|string',
            'outcome'=>'required|string',
            'notes'=>'required|string',
            'procedure_details'=>'required|string',
            'pre_op_instructions'=>'required|string',
        ]);
        Surgery::create($validated);
        return redirect(route('surgery.index'))->with('status', 'surgery details added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Surgery $surgery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Surgery $surgery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Surgery $surgery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Surgery $surgery)
    {
        //
    }
}
