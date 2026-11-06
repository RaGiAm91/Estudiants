@extends('layouts.master')

@section('titulo', 'Editar alumno' . $student['name'])

@section('content')

<div class="row">
   <div class="offset-md-3 col-md-6">
      <div class="card shadow border-0">
         <div class="card-header text-center bg-warning-subtle">
            Modificar alumno
         </div>
         
         <div class="card-body p-2">
            <form action="{{ route('student.update', ["id" => $id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" 
               value="{{ old('name', $student['name']) }}" required>
               @error('name')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" 
                value="{{ old('email', $student['email']) }}" required>
                @error('email')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" 
                value="{{ old('address', $student['address']) }}" required>
                @error('address')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror
            </div>
            <br>
            <div class="form-group text-center">
               <button type="submit" class="btn btn-warning p-2">
                  Modificar alumno
               </button>
            </div>

            </form>

@endsection