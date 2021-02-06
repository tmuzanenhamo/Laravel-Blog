@extends('layouts.app')

@section('content')
    <h1>Create</h1> 
    <hr>
    <form action="{{url('/posts')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name='title' aria-describedby="emailHelp" placeholder="Blog Title">
          </div>
          <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" name="body" rows="5"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
    </form> 
    {{-- {{ Form::open(array('url' => '/posts/store', 'method'=>'post')) }}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}

    {{ Form::close() }} --}}

@endsection