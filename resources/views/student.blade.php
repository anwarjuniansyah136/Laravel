@extends('layout.main')
@section('title','Student')

@section('content')
    <h1>ini halaman student</h1>
    <ol>
        @foreach ($student as $item)
            <li>
                {{$item->name}} | {{$item->gender}} | {{$item->nis}}
            </li>
        @endforeach
    </ol>
@endsection
