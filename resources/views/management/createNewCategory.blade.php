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
        <h4>Create New Category</h4>
         </div>
        <div class="card-body">
        @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
        {{ $error }}    
        </div>
    
@endforeach



        <form action="/management/category" method='POST'>
        @csrf
            <label for="">New Category</label>
            <input type="text" class='form-control' name='cat'>
            <input type="submit" class='btn btn-danger'>
        </form>
        </div>

        <div class="card-footer">
        
        </div>
    </div>


        </div>
    </div>

</div>
@endsection