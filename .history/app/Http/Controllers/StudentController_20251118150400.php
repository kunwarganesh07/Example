<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentFees;
use App\Models\StudentProfile;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $student = Student::all();
        $student = Student::with('profile')->get();
        return view('student.index', compact('student'));
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
        // dd($request->all());

        $image = '';
        if ($request->hasFile('image')) {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload/images'), $image);
        }

        $student = new Student();
        $student->name = $request->name;
        $student->contact = $request->contact;
        $student->address = $request->address;
        $student->image = $image;
        $student->save();
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $student = Student::findOrfail($id);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $data = Student::findOrfail($id);


        $image = $data->image;
        if ($request->hasFile('image')) {
            $image = time() . '.' . $request->image->extension();
            $request->image->move(public_path('upload/images'), $image);
        }


        $data->name = $request->name;
        $data->address = $request->address;
        $data->contact = $request->contact;
        $data->image = $image;
        $data->save();

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Student::findOrfail($id);
        $data->delete();
        return redirect()->route('student.index');
        // dd('DELETE STUDENT');
    }

    public function profile($id)
    {
        $student = Student::findOrfail($id);
        return view('student.profile', compact('student'));
    }

    public function profileupdate(Request $request)
    {
        // dd($request->all());
        $data = new StudentProfile();
        $data->student_id = $request->student_id;
        $data->father_name = $request->father_name;
        $data->class = $request->class;
        $data->save();

        return redirect()->route('student.index');
    }

    public function fees($id)
    {
        // $fees = StudentFees::all();
        $student = Student::with('fees')->baseSole()findOrfail($id);
        return view('student.fees', compact('student'));
    }
    public function pay($id)
    {
        $student = Student::findOrfail($id);
        return view('student.pay', compact('student'));
    }

    public function feesstore(Request $request)
    {
        // dd($request->all());
        $fees = new StudentFees();
        $fees->student_id = $request->student_id;
        $fees->amount = $request->amount;
        $fees->date = $request->date;
        $fees->message = $request->message;
        $fees->save();
        return redirect()->route('students.fees', $request->student_id);
    }
}
