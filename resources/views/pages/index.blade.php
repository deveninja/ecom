{{-- @php if(DB::connection()->getDatabaseName())
   {
     echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
   }
@endphp --}}
@extends('layouts.app')

@section('content')
  <h1>Welcome to eCom site</h1>
  <p>This is the Index Page Content</p>
@endsection
