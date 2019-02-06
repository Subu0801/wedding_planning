<?php

namespace App\Http\Controllers;

use App\vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    //hadana adds eka para pennana eka page ekk
    {
        $data = vendor::all();
        return view("vendor.index")->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    // hadana form eke form eka load krana page ekk hadanawa
    {
        return view("vendor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    //submit button ekk click karata passe data base ekta save wena eka
    {
        //1 vali date 
         $this ->validate($request,array(
             'name' => 'required|max:255',
             'type' => 'required',
             'email' => 'required',
             'address' => 'required',
             'basicinfor' => 'required',
             'mobile' => 'required',
             'land' => 'required'
        ));

        //2 store data left side data base , right sde name side
         $vendor = new vendor;
        
         $vendor->vendor_name = $request->name;
         $vendor->vendor_type = $request->type;
         $vendor->email = $request->email;
         $vendor->vendor_address = $request->address;
         $vendor->basic_infor = $request->basicinfor;
         $vendor->mobile_no = $request->mobile;
         $vendor->land_no = $request->land;

    
        $vendor->save();


        //3 redirect to another page
        $data = vendor::all();
        return view("vendor.index")->with('data',$data);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(vendor $vendor)
    //post godak thibbama eka post ekk clik karama ekak widihata penna eka
    {
        $data = Vendor::find($id);
        return view("vendor.show")->with('data',$data);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(vendor $vendor)
    //denata thiya post eka edit kranda one unma edit button eka click krata passe data base eka aluth form ekakkata ganna eka
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vendor $vendor)
    //edit karama ena form ekta aluth details demma wena eka
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(vendor $vendor)
    //post delete krana eka
    {
        //
    }
}
