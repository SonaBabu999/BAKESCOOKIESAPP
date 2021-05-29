@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-2">
      @include('sidebar')
        
        </div>

        <div class="col-10">
    <div class="card">
        <div class="card-header">
        <h2 style="text-align:center;"><U><B>CUSTOMER PAID BOOKINGS</U></B></h2><br>
       </div>
        <div class="card-body" style="
    overflow: auto;">
        @if (session('status'))
    <div class="alert alert-success alert-dismissible" >
    <button type="button" class="close" data-dismiss="alert">&times;</button>

        {{ session('status') }}
    </div>
@endif
 

<table class="table">
    <thead>
        <tr>
            <td><b>Id</b></td>
            <td><b>UserId</b></td>
            <td><b>ItemId</b></td>
            <td><b>PaymentMethod</b></td>            
            <td><b>Address</b></td> 
            <td><b>Amount</b></td> 
        </tr>
    </thead>
    <tbody>
 
    @foreach($User as $tab_user)
    <tr>
        <td> {{$tab_user->id }}</td>
        <td> {{$tab_user->UserID }}</td>
        <td> {{$tab_user->Item }}</td>
        <td> {{$tab_user->payment_method}}</td>
        <td> {{$tab_user->address}}</td>
        <td> {{$tab_user->amount}}</td>
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