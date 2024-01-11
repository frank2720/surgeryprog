<?php

namespace App\Http\Controllers;

use App\Models\Beneficiary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BeneficiaryController extends Controller
{

    public function add():View
    {
        return view('admin.beneficiary');
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
        return view('admin.beneficiary',['beneficiary'=>$beneficiary]);
    }
}
