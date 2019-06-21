<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;

use App\Event;
use Illuminate\Support\Facades\DB;
use App\Vendor;
class EventController extends Controller

{

    

    public function index(Request $req)
    {

       $user= Vendor::join('users','users.id','=','vendors.user_id')
       ->where('users.id','=',$req->id)
       ->get(['users.id as id'])
       ->first();

       $events = [];

       $data = Event::where('provider_id',$req->id)->get();

       if($data->count()){

          foreach ($data as $key => $value) {

            $events[] = Calendar::event(

                $value->title,

                true,

                new \DateTime($value->start_date),

                new \DateTime($value->end_date.' +1 day')

            );

          }

       }

      $calendar = Calendar::addEvents($events); 

      return view('mycalender', compact('calendar','user'));

    }

    public function store(Request $req){
        DB::beginTransaction();

        try {
            
            Event::create(([
                'provider_id'=>auth()->id(),
                'title'=> $req->title,
                'start_date'=>$req->sdate,
                'end_date'=>$req->edate,
            ]));


            DB::commit();    // Commiting  ==> There is no problem whatsoever
            return Redirect()->back();
        } catch (\Exception $e) {
            DB::rollback();   // rollbacking  ==> Something went wrong
        
            return $e;
        }
    }

}