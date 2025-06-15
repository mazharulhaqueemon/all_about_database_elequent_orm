@extends('layout')
@section('title')
    Update Student data
@endsection

@section('content')
    <form action="{{route('student.update',$student->id)}}" method="POST">
        @csrf
        @method('PUT')
        <pre>
            @php
                print_r($errors->all());
            @endphp
        </pre>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="{{$student->name }}" class="form-control" id="name" name="name">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{$student->email }}" class="form-control" id="email" name="email">

        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number"value="{{$student->age }}" class="form-control" id="age" name="age">

        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" value="{{$student->city }}" class="form-control" id="city" name="city">

        </div>
        <button type="submit" value="save" class="btn btn-success">Update</button>
    @endsection
