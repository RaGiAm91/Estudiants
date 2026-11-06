<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Database\Seeders\StudentSeeder;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        //$students = Student::all();
        $students = Student::query()->paginate(8);
        return view('student.index', ["arrayEstudiants" => $students]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|unique:students,email',
            'address' => 'required|string|max:120'
        ],
        [],//mensajes personalizados
        [ // cambiar el nombre del atributo en los mensajes de aviso por error
            'name' => 'Nombre',
            'email' => 'Email',
            'address' => 'Direccion'
        ]);

        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->save();

        $students = Student::all();
        return redirect()->route('student.index');


        //return view('student.index')->with('student', $request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.show', ["student" => $student, "id" => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', ['student' => $student, "id" => $id]);
    } 

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email',
            'address' => 'required|string|max:120'
        ],
        [],//mensajes personalizados
        [ // cambiar el nombre del atributo en los mensajes de aviso por error
            'name' => 'Nombre',
            'email' => 'Email',
            'address' => 'Direccion'
        ]);

        $student = Student::findOrFail($id);

        $student->name = $request->name;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->save();

        return redirect()->route('student.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        //Student::destroy($id); Esto es lo mismo que lo de arriba

        return redirect()->route('student.index');
        
    }
}
