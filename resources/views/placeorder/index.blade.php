@extends('layouts.app')

@section('content')
<?php
use App\Http\Controllers\placeorder\placeorderController;
$total=placeorderController::cartItem();
?>
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
        <div class="card">
        <div class="card-header">
      
        
        <h4>Place Orders  </h4>
      
        
        <a href="/cartlist" class='btn btn-primary float-right'>Cart({{$total}})</a>
        
        </div>
        <div class="card-body">
      
        <h2 style="text-align:center;"><U><B>CATEGORIES</U></B></h2><br>
        <nav class="navbar navbar-expand-sm bg-info">
  <ul class="navbar-nav">
       @foreach($categories as $cat)
       <li class="nav-item">
       <a class="nav-link active" href='/catmenu/{{$cat->id}}' style="font-size:20px;">{{$cat->name}}</a>
       </li>
        @endforeach
        </ul>
</nav>
        </div>

        <div class="card-footer">
        
        </div>
    </div>


        </div>
    </div>

</div>
@endsection