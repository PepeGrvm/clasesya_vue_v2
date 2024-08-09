<?php

// app/Http/Controllers/SalaController.php

namespace App\Http\Controllers;

use App\Models\Sala;
use App\Models\Alumno;
use App\Models\Profesor;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Student;

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::with(['student', 'teacher'])->get();
        return view('salas.index', compact('salas'));
    }

    public function create()
    {
        $students = Student::all();
        $teachers = Teacher::all();
        return view('salas.create', compact('students', 'teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'student_id' => 'required|exists:student,id',
            'teacher_id' => 'required|exists:teacher,id',
        ]);

        Sala::create($request->all());

        return redirect()->route('salas.index');
    }

    public function edit(Sala $sala)
    {
        $students = Student::all();
        $teachers = Teacher::all();
        return view('salas.edit', compact('sala', 'students', 'teachers'));
    }

    public function update(Request $request, Sala $sala)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'student_id' => 'required|exists:students,id',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $sala->update($request->all());

        return redirect()->route('salas.index');
    }

    public function destroy(Sala $sala)
    {
        $sala->delete();
        return redirect()->route('salas.index');
    }
}
