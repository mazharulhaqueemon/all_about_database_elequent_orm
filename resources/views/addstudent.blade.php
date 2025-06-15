@extends('layout')
@section('title')
    Add New Student
@endsection

@section('content')
    <form action="{{route('student.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="{{ old('name') }}" class="form-control" id="name" name="name">

        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" value="{{ old('email') }}" class="form-control" id="email" name="email">

        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age">

        </div>
        <div class="mb-3">
            <label for="city" class="form-label">City</label>
            <input type="text" class="form-control" id="city" name="city">

        </div>
        <button type="submit" value="save" class="btn btn-success">Save</button>
    @endsection
