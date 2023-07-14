@extends('layouts.master')

@section('content')
<section id="blog">
<div class="blog-box-container">
<div class="container">
  <form action="{{route('/store')}}" method="POST">
  @csrf
    <div class="row">
      <div class="col-25">
        <label for="Category_Name">Category Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="Category_Name" name="Category_Name" placeholder="Insert Category Name">
      </div>
    </div>
    
    
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>
</div>
@endsection