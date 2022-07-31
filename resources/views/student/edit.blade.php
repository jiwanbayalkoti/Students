@extends('student.layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session('status'))
                <h6 class="alert alert-success">{{session('status')}}</h6>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>
                        Edit Student
                        <!-- <a href="{{'students' }}" class="btn btn-danger float-end">Back</a> -->
                    </h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{url('update-student/'.$student->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group mb-3">
                            <level for="">Student Name</level>
                            <input class="form-control" type="text" name="name" value="{{ $student->name}}" required/>
                        </div>

                        <div class="form-group mb-3">
                            <level for="email">Email</level>
                            <input class="form-control" type="email" name="email"  value="{{ $student->email}}"  required/>
                        </div>

                        <div class="form-group mb-3">
                            <level for="course">Course</level>
                            <input class="form-control" type="text" name="course" value="{{ $student->course}}" required/>
                        </div>

                        <div class="form-group mb-3">
                            <level for="profile_image">Photo</level>
                            <input class="form-control" type="file" name="profile_image" />
                            <img src="{{ asset('uploads/students/'.$student->profile_image)   }}" height="70px" width="70" alt="IMAGE" >

                        </div>

                        <div class="form-group mb-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection



