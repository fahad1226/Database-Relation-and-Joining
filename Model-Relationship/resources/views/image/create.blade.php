@extends('layouts.navbar')

@section('content')
    <h2 class="display-4 text-center">Join Today</h2>
    <form action=" {{ url('store') }} " method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <input type="text" value="{{ old('name') }}" name="name" placeholder="Name" class="form-control">
        </div>
        <div class="form-group">
            <input type="email" value="{{ old('email') }}" name="email" placeholder="Email" class="form-control">
        </div>
        <div class="form-group">
            <input type="date" value=" {{ old('doob') }} " name="dob" placeholder="Date Of Birth" class="form-control">
        </div>
        <div>
                {{ $errors->first('image') }}
            </div>
        <div class="form-group d-flex flex-column">
            <input type="file" name="image" >
        </div>
        <div>
            {{ $errors->first('image') }}
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary">
        </div>
       
    </form>
@endsection