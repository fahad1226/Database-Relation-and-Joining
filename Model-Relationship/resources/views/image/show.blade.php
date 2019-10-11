@extends('layouts.navbar')


@section('content')

    @if (session()->has('msg'))
        <div class="alert alert-danger">
            {{ session()->get('msg') }}
        </div>
    @endif

    @foreach ($objects as $object)
    <div class="media py-2">
        @if ($object->image)
        <img class="rounded-circle" src=" {{ asset('storage/'.$object->image) }} " width="60" height="60" class="mr-3" >
        
        @else <img class="rounded-circle" width="60" height="60" src="https://source.unsplash.com/random/<?php echo rand(1,40) ?>" >

        @endif
       
        <div class="media-body">
        <h5 class="mt-0 d-inline"> {{ $object->name }} </h5>
        <small class="d-inline">created at {{ $object->created_at }}</small>
        <br>
        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
        
    </div>
    @endforeach
        
     
@endsection
