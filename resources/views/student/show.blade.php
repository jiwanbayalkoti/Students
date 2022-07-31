@extends('student.layouts')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
          
            <div class="card">
                <div class="card-header">
                    <h4>
                        Personal Profile
                    </h4>
                </div>
                <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                <div class="card-body">
                    <div class="card" style="width: 20rem;">
                        <img src="{{ asset('uploads/students/'.$student->profile_image)   }}" class="card-img-top" alt="NO IMAGE" >

                        <div class="card-body">
                            <h2 class="card-title">{{$student->name}}</h2>
                            <h6 class="card-text">Program: {{$student->course}}</h6>
                            <h6 class="card-text">Contact: {{$student->email}}</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                         </div>
                </div>
                </div>
                <div class="col-4"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

