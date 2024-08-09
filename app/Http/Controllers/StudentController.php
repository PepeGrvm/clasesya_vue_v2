<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return response()->json($students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' =>bcrypt($request->input('password')),
            'born_date' => $request->input('born_date'),
        ]);
        return response()->json($student,201);

    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:student,email,' . $student->id,
            'password' => 'nullable|string',
        ]);

        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->input('password'));
        }

        $student->fill($validatedData)->save();

        return response()->json($student, 200); // Respuesta de éxito
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json([
        'eliminado'=> 'Alumno Eliminado',
        'number' => 204
        ]); // Respuesta de éxito
    }
}
