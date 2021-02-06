@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1> 
    <hr>
    <h1>{{$post->title}}</h1>
    <form action="{{url('/posts/'.$post->id)}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name='title' aria-describedby="emailHelp" value='{{$post->title}}'>
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5">{{$post->body}}</textarea>
          </div>
          <input name="_method" type="hidden" value="PUT">
          <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
@endsection