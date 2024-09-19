@extends('layout.main')
@section('title','Classroom')

@section('content')
    <h1>ini halaman ClassRoom</h1>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($class as $obj)
                <td>{{$loop->iteration}}</td>
                <td>{{$obj->name}}</td>
            @endforeach
            <tr>

            </tr>
        </tbody>
    </table>
@endsection
