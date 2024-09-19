@extends('layout.main')

@section('title','home')
@section('content')
<h1>ini adalah halaman home</h1>
<table class="table">
    <tr>
        <td>No</td>
        <td>Nama</td>
    </tr>
    @foreach ($nama as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item}}</td>
        </tr>
    @endforeach
</table>
@endsection
