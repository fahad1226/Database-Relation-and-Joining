@extends('layouts.navbar')


@section('content')
<h2 class="display-4 text-center">Equi Join Solution</h2>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Employee ID</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Employee Address</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($equi_join as $join)
        <tr>
            <td> {{ $join->emp_id }} </td>
            <td>{{ $join->emp_name }}</td>
            <td> {{ $join->address }} </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
