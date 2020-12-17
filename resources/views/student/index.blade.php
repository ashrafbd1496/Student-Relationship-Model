@extends('layouts.app')

@section('main')

    <div class="wrap-table ">
        <a class="btn-primary btn-sm btn" href="{{route('student.create')}}">Add New Student</a>
        <a class="btn-warning btn-sm btn" href="{{route('course.index')}}">Course</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Students</h2>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>age</th>
                        <th>course_id</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($all_stu as $stu)
                    <tr>
                        <td>{{$loop ->index +1}}</td>
                        <td>{{$stu->name}}</td>
                        <td>{{$stu->age}}</td>
                        <td>{{$stu->course}}</td>

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
