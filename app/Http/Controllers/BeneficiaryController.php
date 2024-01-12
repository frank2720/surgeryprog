<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BeneficiaryController extends Controller
{

    public function add():View
    {
        return view('admin.forms.beneficiary_add');
    }

    public function store(Request $request)
    {
        $post = new Beneficiary;
        $post->firstname = $request->firstname;
        $post->lastname = $request->lastname;
        $post->gender = $request->gender;
        $post->age = $request->age;
        $post->contact = $request->contact;
        $post->history = $request->medical_history;
        $post->save();
        return redirect(route('add-beneficiary'))->with('status', 'Beneficiary information added successfully');   
    }
    
    public function show():View
    {
        $beneficiaries = DB::table('beneficiaries')->latest()->get();
        return view('admin.index',['beneficiaries'=>$beneficiaries]);
    }

    public function view(Request $request, $id):View
    {
        $beneficiary = DB::table('beneficiaries')
                           ->where('id','=',$id)
                           ->get();
        return view('admin.beneficiary_details',['beneficiary'=>$beneficiary]);
    }

    public function edit(Beneficiary $beneficiary):View
    {

        return view('admin.forms.beneficiary_edit', [

            'beneficiary' => $beneficiary,

        ]);
    }

    public function update(Request $request, Beneficiary $beneficiary):RedirectResponse
    {
        $validated = $request->validate([

            'firstname' => 'required|string|max:255',
            'lastname'=>'required|string|max:255',
            'gender'=>'required|string|max:255',
            'age'=>'required|integer|max:50',
            'contact'=>'required|string|max:255',
            'medical_history'=>'required|string',

        ]);

        $beneficiary->update($validated);

        return redirect(route('dashboard'));
    }
}
