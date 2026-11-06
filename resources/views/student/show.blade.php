@extends('layouts.master')

@section('titulo', 'Show'  . $student['name'])

@section('content')

<div class="container mt-4 bg-warning-subtle">
  <div class="row g-2 justify-content-center">
    <div class="cardshadow border-0">
      <div class="card-body">
        <img src="https://cdn-icons-png.freepik.com/512/10789/10789688.png" class="rounded mx-auto d-block w-30 h-30" alt="student">
        <h5 class="card-title text-center">#{{$student['id']}}.{{$student['name']}}</h5>
        <br>
        <p class="card-text text-center"><b>Email:</b> {{$student['email']}}</p>
        <p class="card-text text-center"><b>Address:</b>{{$student['address']}}</p>
        <table class="d-flex justify-content-center">
        <td><a class="btn btn-primary" href="/student">Volver
        </a></td>
        <td><form action="{{ route('student.edit',['id'=> $student['id']]) }}" method="POST">
          @csrf
          @method('PUT')
          <button class="btn btn-warning" type="submit">Modificar</button>
        </form> </td>
        <td><form action="{{ route('student.destroy',['id'=> $student['id']]) }}" method="POST">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Order 66</button>
        </form></td></table>
      </div>
    </div>
  </div>
  <br>
</div>


@endsection