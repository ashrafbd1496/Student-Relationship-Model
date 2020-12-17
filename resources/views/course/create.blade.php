@extends('layouts.app')
@section('main')
    <div class="wrap ">
        <a class="btn-primary btn-sm btn" href="{{route('course.index')}}">All Courses</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Add New Course</h2>
                <form action="{{route('course.store')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="">Course Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <input name="add" class="btn btn-primary" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
