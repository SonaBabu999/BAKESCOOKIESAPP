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
        <h2 style="text-align:center;"><U><B>CUSTOMER FEEDBACKS</U></B></h2><br>
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
            <td><b>id</b></td>
            <td><b>Name</b></td>
            <td><b>Email</b></td>
            <td><b>Message</b></td>
            <!-- <td>Edit</td>
            <td>Delete</td> -->
        </tr>
    </thead>
    <tbody>
 
    @foreach($User as $tab_user)
    <tr>
        <td> {{$tab_user->id }}</td>
        <td> {{$tab_user->name }}</td>
        <td> {{$tab_user->email }}</td>
        <td> {{$tab_user->message }}</td>
       
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