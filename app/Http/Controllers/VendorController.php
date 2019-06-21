<?php

namespace App\Http\Controllers;

use App\vendor;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Calendar;
use App\Event;
class VendorController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminIndex(){
        return view('admin.vendor');
    }

    public function index($type)
    
    {
       
        $vendors = Vendor::leftjoin('profiles','profiles.user_id','=','vendors.user_id')
        ->select('vendors.vendor_id as id','vendors.name','vendors.company_name','vendors.description','vendors.vendor_address','vendors.vendor_type','vendors.user_id','profiles.profile_img')
        ->get();
        $groups = array();

        foreach ( $vendors as $value ) {
            $groups[$value['user_id']][] = $value;
        }
        // $vendors = Vendor::all();
        // dd($vendors);
        return view("vendor_services.vendor",compact('type','groups'));
    }

    public function singleIndex($type,$id)
   
    {
        // $vendor = Vendor::leftjoin('users', 'vendors.user_id', '=', 'users.id')
        // ->where('users.id',$id)->first();
        $vendor = Vendor::leftjoin('users', 'vendors.user_id', '=', 'users.id')
        ->where('users.id',$id)
        ->where('vendors.vendor_type',$type)
        ->get(['users.id as userId','users.name','vendors.vendor_id as id','vendors.name as vendorName','vendors.company_name as companyName','vendors.vendor_address as address','vendors.vendor_type as vendorType'])
        ->first();
       

        

    
        return view("vendor_single",compact('vendor','type','id'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
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
    
    {
        //
    }

    public function postPost(Request $request) //rating save

    {

        request()->validate(['rate' => 'required']);
        $post = Vendor::select('vendors.vendor_id as id','vendors.name','vendors.company_name','vendors.description','vendors.vendor_address','vendors.vendor_type','vendors.user_id','vendors.created_at','vendors.updated_at')
        ->where('vendor_id', $request->id)
        ->get()
        ->first();//::find($request->id);
        
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $post->ratings()->save($rating);
        // Redirect::back()->with('message','Operation Successful !');
        // return redirect::refresh();
        // return redirect()->route("/vendor/{$post->vendor_type}");

    }
}
