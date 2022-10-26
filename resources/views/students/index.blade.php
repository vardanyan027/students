@extends('layoutes.menu')

@section('content')
<div>
    <table class="table">
        <thead>
            <tr">
                <th scope="col">ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Date of birth</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td scope="row">{{ $student->id }}</td>
                <td>
                    <a href="/students/{{$student->id}}">{{$student->first_name}} {{$student->last_name}}</a>
                </td>
                <td>{{ $student->date_birth }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone_number }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection