<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use App\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = Catagory::all();
        // return view('catagory.index')->with('data',$data);
    
        $profile = User::leftjoin('vendors', 'vendors.user_id', '=', 'users.id')
            ->where('users.id',auth()->id())
            ->get(['users.*','vendors.name as vendorName','vendors.company_name as companyName','vendors.vendor_address as address','vendors.vendor_type as vendorType'])
            ->first();
        return view('profile',compact('profile'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        

        $user = User::where('id',$request->id)
        ->update(array(
            'name' => $request->name,
            // 'user_type' => $request->usertype,
            'mobile_no' => $request->mobile,
            'password' => Hash::make($request->newPassword),
            'land_no' => $request->land,
            'email' => $request->email,
        ));

        // return redirect()->action('ProfileController@index')->with('Successfully Updated');
        return redirect()->back()->with('message','Successfully Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
    }

    //update profile

    public function updateImg(Request $request){
        request()->validate([

            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',

        ]); 

        $imageName = time().'.'.request()->image->getClientOriginalExtension();

        request()->image->move(public_path('images/user_profile'), $imageName);

        Profile::create(([
            'user_id'=>auth()->id(),
            'profile_img'=> $imageName,
        ]));
    }
}
