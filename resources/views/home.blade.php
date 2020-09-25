@extends('layouts.main-layout')
@section('content')
  <h1>Stanze:</h1>
  <h2><a href="{{route('stanza-create')}}">New Stanze</a></h2>
  <ul>
    @foreach ($stanze as $st)
      <li>
        <a href="{{route('stanze-show', $st -> id)}}">{{$st -> room_number}}</a>
      </li>
    @endforeach
  </ul>
@endsection
