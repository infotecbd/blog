@extends('layouts.master')

@section('content')
<section id="blog">
<div class="blog-box-container">
<div class="container">
  <form action="action_page.php">
  @csrf
    <div class="row">
      <div class="col-25">
        <label for="title">Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="title" name="title" placeholder="Title">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="Select Category">Category</label>
      </div>
      <div class="col-75">
        <select id="category" name="category_name">
          <option value="Artifical Inteligenece">Artifical Inteligenece</option>
          <option value="Web Development">Web Development</option>
          <option value="Graphic Designer">Graphic Designer</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div></div>
@endsection