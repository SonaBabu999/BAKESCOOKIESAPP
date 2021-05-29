@extends('layouts.app')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
        <div class="card">
        <div class="card-header">
        <h4>Place Orders</h4>
        
        
        </div>
        <div class="card-body" style="
    overflow: auto;" >
        <h2 style="text-align:center;"><U><B>CART</U></B></h2><br>
        <table class="table">
    <tbody>
   
        @foreach($menuitm as $m)
          <tr>
           <td><img src="{{URL::asset('image/'.$m->image)}}" height='100' width='100' alt="">
           
<p ><strong>{{$m->name}}</strong></p></td>
           <td>{{$m->description}}<br>
<strong>Price: {{$m->price}}</strong> </td>
           <td><a href="/removecart/{{$m->cartid}}" class="btn btn-primary">Remove from cart</a></td>
       </tr>
        @endforeach
        </tbody>

</table>  -->
        </div >
        <div style="text-align:center;">
        <br><br><a class="btn btn-primary" href="/placeorder">Go Back</a>
        <a class="btn btn-primary" href="/ordernow">Order Now</a>
        </div>
        </div>
        <div class="card-footer">
        
        </div>
    </div>


        </div>
    </div>

</div>
@endsection
        
