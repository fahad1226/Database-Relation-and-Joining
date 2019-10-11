<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Department;
use DB;
class Employee_Department_Controller extends Controller
{

    public function employee()
    {
        $e_info = DB::table('employees')->get();
        return view('pages.employee',compact('e_info'));
    }

    public function department()
    {
        $d_info = DB::table('departments')->get();

        return view('pages.department',compact('d_info'));
    }



    public function equi_join()
    {
       $equi_join = DB::table('employees')
                      ->join('departments','employees.emp_id','=','departments.emp_id')
                       ->join('departments as d1','employees.address','=','d1.location')
                      ->select('employees.emp_id','employees.emp_name','employees.address')->get();

        // $employees = "SELECT emp_name FROM employees,departments WHERE employees.emp_id = departments.dept_id AND
        // employees.address = departments.location ";
        return view('pages.equi_join',compact('equi_join'));
    }
    
}
