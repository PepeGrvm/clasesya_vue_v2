<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Teacher;

class RegisterController extends Controller
{
    public function RegisterStudent(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:students',
            'password' => 'required|string|min:8|confirmed',
            'born_date' => 'required|date',
        ]);

        // Create a new student record
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = \bcrypt($request->password);
        $student->born_date = $request->born_date;
        $student->save();

        return response()->json([
            'message' => 'Student registered successfully',
            'student' => $student
        ], 201);
    }

    public function RegisterTeacher(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:teachers',
            'password' => 'required|string|min:8|confirmed',
            'born_date' => 'required|date',
            'subject' => 'required|string|max:255',
            'graduated_institution' => 'required|string|max:255',
            'graduation_date' => 'required|date',
        ]);

        $teacher = new Teacher;
        $teacher->name = $request->name;
        $teacher->email = $request->email;
        $teacher->password = \bcrypt($request->password);
        $teacher->born_date = $request->born_date;
        $teacher->subject = $request->subject;
        $teacher->graduated_institution = $request->graduated_institution;
        $teacher->graduation_date = $request->graduation_date;

        $teacher->save();

        return response()->json([
            'message' => 'Teacher registered successfully',
            'teacher' => $teacher
        ], 201);
    }
}
