<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employees.table', compact('employees'));
    }

    public function datatable () 
    {
    	$employees = Employee::all();
        return view('employees.datatable', compact('employees'));
    }

    public function ajax () 
    {
    	return view('employees.ajax');
    }
}
