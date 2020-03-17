@extends('layouts.layout')
@section('main')
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
