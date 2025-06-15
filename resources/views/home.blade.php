@extends('layout')
@section('title')
    All User Data
@endsection

@section('content')
<a href=" {{route('student.create')}} " class= "btn btn-success btn-sm mb-3 " >Add New</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>City</th>
                <th>View</th>
                <th>Delete</th>
                <th>Update</th>
            </tr>
        </thead>
        @foreach ($students as $x)
            <tr>
                <td> {{ $x->name }} </td>
                <td> {{ $x->email }} </td>
                <td> {{ $x->age }} </td>
                <td> {{ $x->city }} </td>
                <td> <a href="{{route('student.show',$x->id)}}" class="btn btn-primary btn-sm" > View</a> </td>
                <td> <a href="" class="btn btn-danger btn-sm" > View</a> </td>
                <td> <a href="{{route('student.edit',$x->id)}}" class="btn btn-warning btn-sm" > Update</a> </td>
            </tr>
        @endforeach
    </table>
@endsection
