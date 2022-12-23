@extends('layouts.master')

@section('title', 'Users')
@section('content')
    <div class="container py-5">
        <table class="table text-center">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th colspan="2">Update & Delete</th>
            </tr>
            @foreach ($data as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>
                    <td>{{ $value->email }}</td>
                    <td><a class="btn btn-success" href="{{ url('/edit/' . $value->id) }}">Update</a></td>
                    <td><a class="btn btn-danger" href="{{ url('/delete/' . $value->id) }}">Delete</a></td>
                </tr>
            @endforeach
        </table>
    @endsection
