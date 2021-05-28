@extends('layouts.app')

@section('content')
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
        <h2 style="text-align:center;"><U><B>MENU ITEMS</U></B></h2><br>
       @foreach($menu as $m)
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
<form action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="ItemID" value="{{ $m->id }}">
    <button type="submit" class="btn btn-primary">Add to cart</button>
    </form>
</div>
</div>
  
        @endforeach
        </div>

        <div class="card-footer">
        
        </div>
    </div>


        </div>
    </div>

</div>
@endsection