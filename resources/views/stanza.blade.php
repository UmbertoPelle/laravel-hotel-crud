@extends('layouts.main-layout')
@section('content')
  <h1>Stanza: {{$stanza -> room_number}}</h1>
  <h2>Floor: {{$stanza -> floor}}</h2>
  <h2>beds: {{$stanza -> beds}}</h2>
  <a href="{{route('stanze-index')}}">Stanze</a>
@endsection
