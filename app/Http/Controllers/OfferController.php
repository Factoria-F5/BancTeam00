<?php

namespace App\Http\Controllers;

use App\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers=Offer::all();
        return view('offer.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $offer=new Offer([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'location'=>$request->get('location'),
            'agreementType'=>$request->get('agreementType'),
            'quantity'=>$request->get('quantity'),
            'limitDate'=>$request->get('limitDate'),
            'beneficiary'=>$request->get('beneficiary'),
            'companyOffer'=>$request->get('companyOffer'),
        ]);
        $offer->save();
        return redirect('/offer')->with('success','Offer saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = Offer::find($id);
        return view('offer.edit', compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'location'=>'required'
        ]);
        
        $offer->update($request->all());
        return redirect('/offer')->with('success', 'Offer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect('/offer')->with('success', 'Contact deleted!');
    }
}
