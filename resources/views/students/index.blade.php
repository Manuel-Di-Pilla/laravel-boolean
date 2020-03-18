@extends('layouts.layout')
@section('main')
  <div class="filter">
    <input type="text" name="filter" id="filter">
    <input type="button" value="VAI" id='go'>
  </div>
  @foreach (config('students.students') as $key => $student)
    <div class="studente">
      <a href="{{route('student.show', ['id' => $key])}}"><p>{{$student['nome']}}</p></a>
      <p>{{$student['eta']}}</p>
      <p>{{$student['azienda']}}</p>
      <p>{{$student['ruolo']}}</p>
      <p>{{$student['descrizione']}}</p>
      <p> <img src="{{$student['img']}}" alt=""> </p>
    </div>
  @endforeach
@endsection
@section('scripts')
  <script src="{{asset('js/app.js')}}"></script>
@endsection
