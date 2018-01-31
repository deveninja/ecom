@extends('layouts.app')

@section('content')
  <div class="post-title">
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}}</small>
  </div>
  <div class="post-body">
    <p>{{$post->body}}</p>
  </div>
@endsection
