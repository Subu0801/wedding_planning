@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <body style='background-color:#FFFF99'>
                <div class="container">
                    <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        
                            <h6><b>Welcome Wedding Bell Chain!</b></h6>
                        </div>


                        <div class="container">
                                <div class="row">
                                    <div class="col-sm-6">
                                            <div class="card" style="width: 30rem;">
                                                    <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card.</p>
                                                      <a href="#" class="card-link">Card link</a>
                                                      <a href="#" class="card-link">Another link</a>
                                                    </div>
                                                  </div>
                                    </div>
                                                    
                                    <div class="col-sm-6">
                                            <div class="card" style="width: 30rem;">
                                                    <div class="card-body">
                                                      <h5 class="card-title">Card title</h5>
                                                      <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card</p>
                                                      <a href="#" class="card-link">Card link</a>
                                                      <a href="#" class="card-link">Another link</a>
                                                    </div>
                                                  </div>
                                    </div>
                                </div>
                            </div>

                
            </div>
            <br>
            <br>
            
            <div class="container">
                    <div class="row">
                        <div class="col-sm-6"><div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/v64KOxKVLVg" allowfullscreen></iframe>
                            </div>
                        </div>
                        
                    </div>
            </div></div>
        </div>
    </div>


@endsection
