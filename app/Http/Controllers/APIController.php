<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{

    public function getEmployees()
    {
        $query = Employee::select('id', 'name', 'email', 'phone', 'salary', 'department');
        return datatables($query)->make(true);
    }

}