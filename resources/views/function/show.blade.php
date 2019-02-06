@extends('layouts.app')

@section('vendor')

    <div class="container-fluid">
        <h1>{{$data->vendor_name}}</h1>

            <a href="/vendor">
                <button class="btn btn-primary">Back</button>
            </a>
            {{$data->vendor_name}}
            <br>
        <p><email>{{$data->vendor_id}}<email</p>

            <form action="/catagory/{{$data->id}}" method="POST">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input typr="submit" value="Delete Vendor" class="btn ntn-dark">
            </form>



        <a href="#"><button class="btn btn-warning">
            Edit  catagory</button>
        </a>
        </div>
 



    
@endsection