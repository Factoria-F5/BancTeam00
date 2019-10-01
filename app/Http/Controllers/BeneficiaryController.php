<?php

namespace App\Http\Controllers;

use App\Beneficiary;
use Illuminate\Http\Request;

class BeneficiaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beneficiaries=Beneficiary::all();
        return view('beneficiary.index',compact('beneficiaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beneficiary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $beneficiary=new Beneficiary([
            'name'=>$request->get('name'),
            'surname'=>$request->get('surname'),
            'dni'=>$request->get('dni'),
            'birthday'=>$request->get('birthday'),
            'adress'=>$request->get('adress'),
            'phone'=>$request->get('phone'),
            'email'=>$request->get('email'),
        ]);
        $beneficiary->save();
        return redirect('/beneficiary')->with('success','Beneficiary saved!');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function show(Beneficiary $beneficiary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $beneficiary = Beneficiary::find($id);
        return view('beneficiary.edit', compact('beneficiary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beneficiary $beneficiary)
    {
        $beneficiary->update($request->all());
        return redirect('/beneficiary')->with('success', 'Beneficiary updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Beneficiary  $beneficiary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beneficiary $beneficiary)
    {
        $beneficiary->delete();
        return redirect('/beneficiary')->with('success', 'Beneficiary deleted!');
    }
}
