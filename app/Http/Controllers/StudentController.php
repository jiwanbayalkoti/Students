<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function index(){
        $students = Student::latest()->paginate(4);
        return view('student.index', compact('students'))->with('i', (request()->input('page',1)-1)*4);
    }
    
    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        $student = new Student;
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');
        if($request->hasfile('profile_image')){
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/students/', $fileName);
            $student->profile_image = $fileName;
        }
        $student->save();
        return redirect()->back()->with('status', 'Student added successfully.');
    }

      public function edit($id){
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request,$id){

        $student = Student::find($id);
        $student->name = $request->input('name');
        $student->email = $request->input('email');
        $student->course = $request->input('course');

        if($request->hasfile('profile_image')){
            $destination = 'uploads/students/'.$student->profile_image;
            if(file::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extention;
            $file->move('uploads/students/', $fileName);
            $student->profile_image = $fileName;
        }
        $student->update();
        return redirect()->back()->with('status', 'Student Updated successfully.');
    }

        public function destroy($id){
            $student = Student::find($id);
            $destination = 'uploads/students/'.$student->profile_image;
            if(file::exists($destination)){
                file::delete($destination);
            }
            $student->delete();
            return redirect()->back()->with('status', 'Student Deleted successfully.');
        }

        public function show($id){
            $student = Student::find($id);
            return view('student.show', compact('student'));
        }
}
