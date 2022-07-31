@extends('student.layouts')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Laravel Photo CRUD
                    </h4>
                </div>
                <div class="card-body">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Course</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $n= 1; ?>
                        @foreach($students as $student)
                        <tr>
                            <td>{{$n}} <?php $n++; ?></td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->email}}</td>
                            <td>{{$student->course}}</td>
                            <td>
                                <a href="{{url('show-student/'. $student->id )}}">
                                <img src="{{ asset('uploads/students/'.$student->profile_image)   }}" height="70px" width="70" alt="NO IMAGE" >
                                </a>
                            </td>
                            <td>
                                <a href="{{url('show-student/'. $student->id )}}" class="btn btn-success btn-sm">View</a>
                                <a href="{{ url('edit-student/'. $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ url('delete-student/'.$student->id) }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    <div class="d-flax float-end">
                        <div class="mx-auto">
                        {!! $students->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection



