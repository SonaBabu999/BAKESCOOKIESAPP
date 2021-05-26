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
<h2 style="text-align:center;"><U><B>CHECK OUT</U></B></h2><br>

<table class="table table-borderless">
    
    <tbody style="text-align:center;">
      <tr>
        <td>Amount</td>
        <td>${{$total}}</td>
      </tr>
     
    </tbody>
  </table>
  <div>
  <form action="/orderplace" method="POST">
  @csrf
    <div class="form-group">
      <textarea name="address" class="form-control"  placeholder="Enter Address" ></textarea>
    </div>
    <div class="form-group">
        <label for="pwd">Payment Method</label><br><br>
        <input type="radio" value="online payment" name="payment"> <span>online payment</span><br><br>
      
</div>
<div style="text-align:center;">
    <button type="submit" class="btn btn-primary">Proceed</button>
    </div>
  </form>
  </div>
  <div class="card-footer">
        
        </div>
</div>
</div></div></div>
</div>
    
        @endsection