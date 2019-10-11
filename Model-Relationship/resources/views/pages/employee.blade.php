@extends('layouts.navbar')

@section('content')

    
    <h1>Equi Join Example</h1>
    <a href=" {{ url('department') }} ">Goto Department Table</a>
    <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Employee Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($e_info as $employee)
                <tr>
                    <td> {{ $employee->emp_id }} </td>
                    <td>{{ $employee->emp_name }}</td>
                    <td> {{ $employee->address }} </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="text-center">
            <a class="text-dark lead"  href=" {{ url('equi_join') }} ">
                find the employee who worked in a department having location same as their address.
            </a>
        </div>

       
@endsection