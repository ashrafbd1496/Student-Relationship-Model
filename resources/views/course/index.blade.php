@extends('layouts.app')

@section('main')

    <div class="wrap-table ">
        <a class="btn-primary btn-sm btn" href="{{route('course.create')}}">Add New Course</a>
        <a class="btn-warning btn-sm btn" href="{{route('student.index')}}">Students</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Courses</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Course Name</th>
                        <th>Student</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($all_crs as $crs)
                    <tr>
                        <td>{{$loop ->index +1}}</td>
                        <td>{{$crs->name}}</td>
                        <td>

                       @foreach($crs ->student as $stu)
                           {{$stu ->name}},
                            @endforeach
                        </td>


                        <td>
                            <a class="btn btn-sm btn-info" href="#">View</a>
                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                            <a class="btn btn-sm btn-danger" href="#">Delete</a>
                        </td>
                    </tr>
                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
