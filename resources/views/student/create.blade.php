@extends('layouts.app')
@section('main')
    <div class="wrap ">
        <a class="btn-primary btn-sm btn" href="{{route('student.index')}}">All Students</a>
        <div class="card shadow">
            <div class="card-body">
                <h2>Add New Student</h2>
                <form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">

                    @csrf

                    <div class="form-group">
                        <label for="">Student Name</label>
                        <input name="name" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        @foreach($all_crs as $crs)
                        <input type="radio" value="{{$crs ->id}}" class="" name="course" multiple id="{{$crs ->slug}}">
                            <label for="{{$crs ->slug}}">{{$crs ->name}}</label><br>

                             @endforeach
                    </div>

                    <div class="form-group">
                        <label for="">Age</label>
                        <input name="age" class="form-control" type="text">
                    </div>



                    <div class="form-group">
                        <input name="add" class="btn btn-primary" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
