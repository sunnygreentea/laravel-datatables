@extends('layouts.admin')
@section('content')
<div class="app-body">
            <div style="padding-top: 20px" class="container-fluid">
            
            <div class="card">
                <div class="card-header">
                    <h1>Simple Table - Employee List</h1>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover " >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Salary</th>
                                    <th>Department</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($employees as $employee)
                                <tr data-entry-id="{{ $employee->id }}">
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->salary }}</td>
                                    <td>{{ $employee->department }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>


        </div>

       
    </div>
@endsection

