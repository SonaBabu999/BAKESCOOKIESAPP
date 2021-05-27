@extends('layouts.app')

@section('content')


<div class="container">

<ul class = "breadcrumb">
              
               <li class = "breadcrumb-item"><a href = "/management">Home</a></li>
               <li class = "breadcrumb-item"><a href="/report">Report</a></li>
               <li class = "breadcrumb-item active"><a href="/report/show">Show Report</a></li>
            </ul>
 


    <div class="row">
       

        <div class="col-12">
    <div class="card">
        <div class="card-header">
        <h6>Report</h6>
      

         </div>
        <div class="card-body">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
        {{ $error }}    
        </div> 
        @endforeach
        <form action="/report/show" method='get'>
        @csrf
        <div class="row"> 
        <div class="col-12">
             

            
                          


            <table class="myclass">
                <thead>
                <tr class='bg-primary text-white'>
                   <!--  <td>#</td>-->
                    <td>Receipt Id</td>
                    <td>Date Time</td>
                    
                     <!-- <td>Staff</td> -->
                      <td>Total Amount</td>
                </tr>    
                </thead>
            <tbody>
          
                @php
                    $amount=0;
                    $count=0;
                @endphp                
@foreach($sales as $s)
<tr >
   
    <td>{{$s->id}}</td>
    <td>{{$s->updated_at}}</td>
  
    <td>{{$s->amount}}</td>
</tr>
@php
    $amount=$amount+$s->amount;
    $count=$count+1;
@endphp
@endforeach 

@if($sales->count() >0)
            <div class="alert alert-success">
            Sale Count On Date between {{$dateStart}} and {{$dateEnd}} is {{$amount}} {{$count}}
</div>
            @else
<div class="alert alert-danger">
No Data Found On  Date between {{$dateStart}} and {{$dateEnd}} 
</div>
            @endif 


            
            </tbody>
            </table>
            <div style="text-align:center;"><br>
            <input type="button" value='Print' onclick="window.print();" class='btn btn-warning'>
            </div>
           
           
        </div> 
        </div>
      
        <div class="card-footer">
        
        </div>
    </div>


        </div>
    </div>

</div>
 

@endsection