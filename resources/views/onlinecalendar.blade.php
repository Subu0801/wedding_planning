@extends('layouts.app')

{{--  include content  --}}
 @section('content')  

 <div class="container"> 
         <div class="row">  
            {{--  first side bar  --}}
              <div class="col-sm-3 col-md-3">
                    <div class="card-deck">
                            <div class="card">
                              <img src="{{asset('images/profile/sixth.JPG') }}" class="card-img-top" alt="...">
                              <div class="card-body">
                                <h5 class="card-title">Finde Your Vendor catagory.</h5>
                                
                                <li class="vendor_set">
                                        <a class="vendor-link" href="/salon">Salon</a>
                                </li>
                                <br>
                                <br>

                                <li class="vendor_set">
                                        <a class="vendor-link" href="/hotel_services">Hotel Services</a>
                                </li>
                                <br>
                                <br>

                                <li class="vendor_set">
                                        <a class="vendor-link" href="photography">Photography</a>
                                </li>
                                <br>
                                <br>

                                <li class="vendor_set">
                                        <a class="vendor-link" href="videography">Videography</a>
                                </li>
                                <br>
                                <br>

                                <li class="vendor_set">
                                        <a class="vendor-link" href="wedding_deco">Wedding Deco</a>
                                </li>
                                
                              </div>
                            </div>
                    </div>
                </div>

                
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Full Calendar Example</div>

                <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
        </div>
    
                  
         </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection



@section('script')
{{--  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>  --}}
{{--  <script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/jquery.min.js'></script>  --}}
<script src='https://fullcalendar.io/js/fullcalendar-3.1.0/lib/moment.min.js'></script>
<script src='https://fullcalendar.io/js/fullcalendar-3.1.0/fullcalendar.min.js'></script>
{!! $calendar->script() !!}
@endsection
    
 



{{--  @endsection  --}}