<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher = Teacher::all();
        return response()->json($teacher);
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
        $teacher = Teacher::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'born_date' => $request->input('born_date'),
            'subject' => $request->input('subject'),
            'graduated_institution' => $request->input('graduated_institution'),
            'graduation_date' => $request->input('graduation_date')
        ]);
        return response()->json($teacher,201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        return response()->json($teacher);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        $validatedData = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|string|email|max:255|unique:student,email,' . $teacher->id,
            'password' => 'ffnullable|string'
        ]);
        if ($request->filled('password')) {
            $validatedData['password'] = bcrypt($request->input('password'));
        }

        $teacher->fill($validatedData)->save();
        return response()->json($teacher,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return response()->json([
            'eliminado'=>'Profesor Eliminado',
            'numero' => 204
        ]);
    }
}
