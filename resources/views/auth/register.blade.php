@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                             </div>
                               
                                 <div class="col-md-20">

                                        <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>

                                        <select class="" name="type" id="type">
                                                <option selected value="null">Choose Type</option>
                                                <option value="1">vendor</option>
                                                <option value="0">user</option>   
                                        </select>
                                                
                            </div> 

                            {{--  vendor form section  --}}
                        
                        <div id="venderSec" style="display: none">
                            <div class="form-group row">
                                <label for="company" class="col-md-4 col-form-label text-md-right">Company Name</label>
    
                                <div class="col-md-6">
                                    <input id="company" type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" name="company">
                                    @if ($errors->has('company'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right">Vendor Address</label>
    
                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address">
                                </div>
                            </div>
                            <div class="col-md-20">

                                <label for="vendor_type" class="col-md-4 col-form-label text-md-right">{{ __('Vendor Type') }}</label>

                                <select class="" name="vendor_type" id="vendor_type">
                                        <option selected value="null">Select Vendor Type</option>
                                        <option value="Hotel Services">Hotel Services</option>
                                        <option value="Photography">Photography</option>
                                        <option value="Salon">Salon</option>
                                        <option value="Videography">Videography</option>
                                        <option value="Wedding Deco">Wedding Deco</option>            
                                </select>
                            </div>
                            
                        </div>
                        
{{--  public form section  --}}
                        
                          <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right"> Mobile Number</label>

                            <div class="col-md-6">
                                <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile">
                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="land" class="col-md-4 col-form-label text-md-right">Land Number</label>

                            <div class="col-md-6">
                                <input id="land" type="text" class="form-control" name="land">
                            </div>
                        </div> 
                        
                     <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



           
           