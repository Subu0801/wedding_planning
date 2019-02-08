@extends('layouts.app')

{{--  include content  --}}
@section('content')
 
<div class="container">
    <div class="row">
        {{--  side bar part  --}}
        <div class="col-sm-3">

                <div class="card-deck">
                        <div class="card">
                          <img src="..." class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          </div>
                        </div>
                </div>

        </div>
        
        {{--  vendor group post past  --}}
        <div class="col-sm-9">

                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                          <h5 class="card-title">Secondary card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                        </div>
                      </div>
        

        </div>
    </div>
</div>



@endsection