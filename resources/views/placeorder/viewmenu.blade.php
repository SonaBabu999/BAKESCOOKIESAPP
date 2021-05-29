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
        <div class="card-body" style="
    overflow: auto;" >
        <h2 style="text-align:center;"><U><B>MENU ITEMS</U></B></h2><br>
        <table class="table">
    <tbody>
       @foreach($menu as $m)
       <tr>
           <td><img src="{{URL::asset('image/'.$m->image)}}" height='100' width='100' alt="">
           
           <p ><strong>{{$m->name}}</strong></p></td>
           <td>{{$m->description}}<br>
<strong>Price: {{$m->price}}</strong> </td>
           <td><form action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="ItemID" value="{{ $m->id }}">
    <button type="submit" class="btn btn-primary">Add to cart</button>
    </form></td>
       </tr>

  
        @endforeach
        </tbody>

</table> 
        </div>

        <div class="card-footer">
        
        </div>
    </div>


        </div>
    </div>

</div>
@endsection