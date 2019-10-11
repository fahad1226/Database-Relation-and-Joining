@extends('layouts.navbar')

@section('content')
    
    <h1>Department Table</h1>
    <a  href=" {{ url('employees') }} ">Goto Employee Table</a>
    <table class="table">
        <thead class="thead-dark">
                <tr>
                    <th scope="col">Department ID</th>
                    <th scope="col">Location </th>
                    <th scope="col">Employee ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($d_info as $department)
                <tr>
                    <td> {{ $department->dept_id }} </td>
                    <td>{{ $department->location }}</td>
                    <td> {{ $department->emp_id }} </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="text-center">
            <a class="text-dark lead"  href="{{ url('equi_join') }}">
                find the employee who worked in a department having location same as their address.
            </a>
        </div>
        
@endsection