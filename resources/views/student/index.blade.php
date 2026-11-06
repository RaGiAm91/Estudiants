@extends('layouts.master')

@section('titulo', 'Index')

@section('content')
<br>
<div class="d-flex justify-content-center">
    {{ $arrayEstudiants->links() }}
</div>

<table class="table table-primary table-striped border-light shadow border-0"> 
  
  <thead class="text-center border border-black">
    <tr>
        <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col" colspan="3">Acciones</th>

    </tr>
  </thead>
  <tbody class="table-group-divider"> @foreach( $arrayEstudiants as $estudiant )

    <tr>
        <td>{{$estudiant['id']}} </td>
      <td>{{$estudiant['name']}} </td>
      <td>{{$estudiant['email']}}</td>
      <td>{{$estudiant['address']}}</td>

      <td>
        <form action="{{ route('student.show',['id'=> $estudiant['id']]) }}" method="GET">
        @csrf
        <button class="btn btn-primary" type="submit">Visualizar</button>
      </form> 
      </td>
      
      <td>
        <form action="{{ route('student.edit',['id'=> $estudiant['id']]) }}" method="GET">
        @csrf
        <button class="btn btn-warning" type="submit">Modificar</button>
      </form> 
      </td>
      
      <td>
       
        
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Order 66</button>
         
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar alumno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Estas seguro que quieres eliminar al alumno?
              </div>
             
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                
                
                <form action="{{ route('student.destroy',['id'=> $estudiant['id']]) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-primary">Si</button>
                </form>
              </div>
            </div>
          </div>
        </div>
       
      </td>            
    </tr>
    
  </tbody>
  @endforeach 

</table>

<div class="d-flex justify-content-center">
    {{ $arrayEstudiants->links() }}
</div>

@endsection