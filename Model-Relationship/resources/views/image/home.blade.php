@extends('layouts.navbar')

@section('content')
    <div class="jumbotron text-center">
        <h2 class="display-4">Welcome to Funbook</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus, dolore.</p>
        <a href="{{ url('create') }}">
            <button class="btn btn-primary">Registration</button>
        </a>
    </div>
@endsection