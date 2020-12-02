@extends('layouts.admin')
@section('content')
<div class="app-body">
            <div style="padding-top: 20px" class="container-fluid">
            
            <div class="card">
                <div class="card-header">
                    <h1>DataTable AJAX - Employee List</h1>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Employee" id="datatable">
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
        pageLength: 10,
        });

        let table = $('.datatable-Employee').DataTable({ 
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('api.employees.index') }}",
            "columns": [
                {"defaultContent": ''},
                { "data": "name" },
                { "data": "email" },
                { "data": "phone" },
                { "data": "salary" },
                { "data": "department" },
            ] ,
            "buttons": dtButtons,
        })
        
        $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
          $($.fn.dataTable.tables(true)).DataTable()
              .columns.adjust();
        });

    })

</script>

@endsection