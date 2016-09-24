@extends('layouts.ksi')

@section('content')

  @if (Auth::guest())
     @include('welcome.guest')
  @else
     @include('welcome.registered')
  @endif
  
  
@endsection
