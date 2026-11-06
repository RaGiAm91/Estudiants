@extends('layouts.master')

@section('titulo', 'Create')

@section('content')
<div class="row">
   <div class="offset-md-3 col-md-6">
      <div class="card shadow border-0">
         <div class="card-header text-center bg-primary-subtle">
            Añadir alumno
         </div>
         
         <div class="card-body p-2">
            <form action="{{ route('student.store') }}" method="POST">
            @csrf

            <div class="form-group">
               <label for="name">Name</label>
               <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required>
            @error('name')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror
            </div>
            


            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required>
               @error('email')
               <div class="invalid-feedback">
               {{$message}}
            </div>
            @enderror
            </div>


            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control @error('address') is-invalid @enderror" required>
               
                  @error('address')
               <div class="invalid-feedback">
               {{$message}}
               </div>
               @enderror
               </div>
            


            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                  Añadir alumno
               </button>
            </div>

            </form>
         </div>
      </div>
   </div>
</div>

@endsection