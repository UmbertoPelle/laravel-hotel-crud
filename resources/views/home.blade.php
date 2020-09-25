@extends('layouts.main-layout')
@section('content')
  <h1>Stanze:</h1>
  <ul>
    @foreach ($stanze as $st)
      <li>
        <a href="#">{{$st -> room_number}}</a>
      </li>
    @endforeach
  </ul>
@endsection
