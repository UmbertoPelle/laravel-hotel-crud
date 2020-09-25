@extends('layouts.main-layout')
@section('content')
  <h1>NEW Stanza</h1>
  <form action="{{ route('stanza-store') }}" method="post">
    @csrf
    @method('POST')
    <div class="form-group">
      <label for="floor">FLOOR</label>
      <br>
      <input type="text" name="floor" value="">
    </div>
    <div class="form-group">
      <label for="room_number">ROOM NUMBER</label>
      <br>
      <input type="text" name="room_number" value="">
    </div>
    <div class="form-group">
      <label for="beds">BEDS</label>
      <br>
      <input type="text" name="beds" value="">
    </div>
    <br><br>
    <button type="submit">CREATE NEW CONFIGURAZIONE</button>
    </form>
@endsection
