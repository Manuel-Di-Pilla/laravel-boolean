@extends('layouts.layout')
@section('main')
  @foreach (config('students.students') as $student)
    <div class="studente">
      <p>{{$student['nome']}}</p>
      <p>{{$student['eta']}}</p>
      <p>{{$student['azienda']}}</p>
      <p>{{$student['ruolo']}}</p>
      <p>{{$student['descrizione']}}</p>
      <p> <img src="{{$student['img']}}" alt=""> </p>
    </div>
  @endforeach
@endsection
