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
        <div class="card-body">
        <h2 style="text-align:center;"><U><B>CART</U></B></h2><br>
       
        @foreach($menuitm as $m)
        <div class="row">
       <div class="col-1" ></div>
<div class="col-3" >
<img src="{{URL::asset('image/'.$m->image)}}" height='100' width='100' alt="">
           
<p ><strong>{{$m->name}}</strong></p>
    
</div>
<div class="col-4">

{{$m->description}}<br>
<strong>Price: {{$m->price}}</strong> 

</div>
<div class="col-4">
<a href="/removecart/{{$m->cartid}}" class="btn btn-primary">Remove from cart</a>
</div>
</div>
  
        
        @endforeach
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
        
