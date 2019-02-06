{{--  apply them  --}}


@extends('layouts.app')

{{--  include content  --}}
@section('content')

<div class="col-sm-12">
    <div class="col-xs-12 test">
        <h1 class="display-1">Ads index Pages</h1>
        {{--  <img class="img-thumbnail" src="{{asset('images\profile\download.jpg')}}" alt="bootstrap logo">  --}}
    </div>
    <div class="col-sm-12">
        {{--  <a href="vendor/create" class="btn btn-danger">Go to create page</a>  --}}
        
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">vendor_id</th>
                <th scope="col">vendor_name</th>
                <th scope="col">vendor_address</th>
                <th scope="col">vendor_type</th>
                <th scope="col">email</th>
                <th scope="col">basic_infor</th>
                <th scope="col">mobile_no</th>
                <th scope="col">land_no</th>
              </tr>
            </thead>
            <tbody>
                @if(count($data)>0)
                    @foreach ($data as $data)
                        <tr>
                            <th scope="row">{{$data->vendor_id}}</th>
                            <a href ="Vendor/{{$data->id}}" class="btn btn-info"><td>{{$data->vendor_name}}</td><a>
                            <td>{{$data->vendor_address}}</td>
                            <td>{{$data->vendor_type}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->basic_infor}}</td>
                            <td>{{$data->mobile_no}}</td>
                            <td>{{$data->land_no}}</td>
                        </tr>
                     @endforeach
                @else
                    <h2>Blanck Database</h2>
                @endif
              
            </tbody>
          </table>
    </div>
    
</div>


@endsection