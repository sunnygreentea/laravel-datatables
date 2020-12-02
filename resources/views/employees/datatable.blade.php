@extends('layouts.admin')
@section('content')
<div class="app-body">
            <div style="padding-top: 20px" class="container-fluid">
            
            <div class="card">
                <div class="card-header">
                    <h1>DataTable - Employee List</h1>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Employee">
                            <thead>
                                <tr>
                                    <th width="10">
                                    </th>
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
                                    <td></td>
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

@section('scripts')

<script>
    $(function () {

        let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons);
        $.extend(true, $.fn.dataTable.defaults, {
        orderCellsTop: true,
        order: [[ 1, 'desc' ]],
        pageLength: 100,
        });
        let table = $('.datatable-Employee:not(.ajaxTable)').DataTable({ buttons: dtButtons })
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
          $($.fn.dataTable.tables(true)).DataTable()
              .columns.adjust();
        });
      
    })

</script>

@endsection