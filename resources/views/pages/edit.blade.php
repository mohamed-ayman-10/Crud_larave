@extends('layouts.master')
@section('title', 'Update')
@section('content')
    <div class="container py-5">
        {{-- {{ dd($user) }} --}}
        <div class="form w-50 mx-auto p-5">
            <form class="p-5" action="{{ url('update') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                @if ($errors->get('name'))
                    <p class="alert alert-danger my-1 p-2">{{ $errors->first('name') }}</p>
                @endif
                <input type="text" name="name" value="{{ $user->name }}" placeholder="Name"
                    class="form-control mb-4">
                @if ($errors->get('email'))
                    <p class="alert alert-danger my-1 p-2">{{ $errors->first('email') }}</p>
                @endif
                <input type="text" name="email" value="{{ $user->email }}" placeholder="Email"
                    class="form-control mb-4">
                <input type="submit" value="Update" class=" btn btn-success w-75 mx-auto d-block">
            </form>
        </div>
    </div>
@endsection
