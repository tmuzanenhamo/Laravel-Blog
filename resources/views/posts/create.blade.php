@extends('layouts.app')

@section('content')
    <h1>Create</h1> 
    <hr>
    <form action="{{url('/posts')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name='title' aria-describedby="emailHelp" placeholder="Blog Title">
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5"></textarea>
          </div>
          <div class="form-group">
              <label for="file">Cover Image</label>
              <input type="file" name="filename" id="file">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
    </form> 


@endsection