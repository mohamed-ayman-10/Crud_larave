@extends('layouts.master')
@section('title', 'Create New User')
@section('content')
    <div class="container py-5">
        <div class="form w-50 mx-auto p-5">
            @if (session()->has('flash_message'))
                <div class="alert alert-success">{{ session()->get('flash_message') }}</div>
            @endif
            <form action="{{ url('store') }}" method="post">
                @csrf
                @if ($errors->get('name'))
                    <p class="alert alert-danger my-1 p-2">{{ $errors->first('name') }}</p>
                @endif
                <input type="text" name="name" placeholder="Name" class="form-control mb-4">
                @if ($errors->get('email'))
                    <p class="alert alert-danger my-1 p-2">{{ $errors->first('email') }}</p>
                @endif
                <input type="text" name="email" placeholder="Email" class="form-control mb-4">
                <input type="submit" value="Create" class=" btn btn-success w-75 mx-auto d-block">
            </form>
        </div>
    </div>
@endsection
