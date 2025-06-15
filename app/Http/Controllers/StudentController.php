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
        $students= Student::all();
         return view('home', compact('students'));

        /* Where Clauses */
        // $students = Student::where('city','Barisal')
        //      ->where('age','>','25')->get();

        // $students = Student::where([
        //     ['city','=','Dhaka'],
        //     ['age','>','23']
        // ])->get();
        // return view('home', compact('students'));


        // $student = Student::find([2,4], ['name', 'email']); // show 2,4 student name and email
        // $student = Student::count(); // count all students
        // $student = Student::max('age');
        // $student = Student::sum('age'); // sum of all students' ages
        // return $student;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("addstudent");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $student = new Student();
        // $student->name = $request->name;
        // $student->email = $request->email;
        // $student->age = $request->age;
        // $student->city = $request->city;
        // $student->save();
        // return redirect()->route('student.index')->with('success', 'Student added successfully');

        // Another way to store data
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
            'city' => $request->city
        ]);
        return redirect()->route('student.index')->with('success', 'Student added successfully');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students =Student::find($id);

        return view('viewstudent', compact('students'));
     }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string  $id)

    {
        $student = Student::find($id);
        return view('updatestudent', compact('student'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=> 'required|max:150|alpha',
            'email'=> 'required|email',
            'age'=> 'required|numeric',
            'city'=> 'required|max:100|alpha',
        ]);
        // I prefer this method to update data
        $student = Student::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->age = $request->age;
        $student->city = $request->city;
        $student->save();

        //------------ Mass method update------------------------
        // $student =Student::where('id', $id)->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'age' => $request->age,
        //     'city' => $request->city
        // ]);
        return redirect()->route('student.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
