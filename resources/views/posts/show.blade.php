@extends('layouts.app')
@section('content')
    <hr>
    <a href="/posts" class="btn btn-success">Go Back</a>
    <hr>
    <h1>{{ $post->title}}</h1> 
    <div class="">
        {{$post->body}}    
    </div>  
    <hr>
    <small>Published on {{ $post->created_at}}  by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            <form action="{{url('/posts/'.$post->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="Delete" class="btn btn-danger float-right">
            </form>
    @endif
    @endif

@endsection

