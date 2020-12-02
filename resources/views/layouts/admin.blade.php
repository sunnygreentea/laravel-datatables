
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="komZXgicAcSzKdD04VumUknhIsZTVHN4JuVECLjf">

    <title>LaravelPanel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- datatables -->
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />

    <!-- ajax -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <!-- menu -->
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />

    <!-- font awesome -->
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <!-- dropzone -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />

    <link href="http://localhost/laravel/realestate/public/css/admin.css" rel="stylesheet" />
    </head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    <header class="app-header navbar">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <span class="navbar-brand-full">Laravel DataTables</span>
            <span class="navbar-brand-minimized">Laravel DataTables</span>
        </a>
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item my-1"><a class="nav-link font-weight-bold" href="{{route('table')}}">Simple Table</a></li>
                <li class="nav-item my-1"><a class="nav-link font-weight-bold" href="{{route('datatable')}}">DataTable</a></li>
                <li class="nav-item my-1"><a class="nav-link font-weight-bold" href="{{route('ajax')}}">Ajax</a></li>
            </ul>
        </nav>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>

        
    </header>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/16.0.0/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="http://localhost/laravel/realestate/public/js/admin.js"></script>

    <script>
    $(function() {
        let copyButtonTrans = 'Copy'
        let csvButtonTrans = 'CSV'
        let excelButtonTrans = 'Excel'
        let pdfButtonTrans = 'PDF'
        let printButtonTrans = 'Print'
        let colvisButtonTrans = 'Column visibility'
        let selectAllButtonTrans = 'Select all'
        let selectNoneButtonTrans = 'Deselect all'

        let languages = {
        'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
        };

        $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn btn' })
        $.extend(true, $.fn.dataTable.defaults, {
            language: {
              url: languages['en']
            },
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }, {
                orderable: false,
                searchable: false,
                targets: -1
            }],
            select: {
              style:    'multi+shift',
              selector: 'td:first-child'
            },
            order: [],
            scrollX: true,
            pageLength: 100,
            dom: 'lBfrtip<"actions">',
            buttons: [
              {
                extend: 'selectAll',
                className: 'btn-primary',
                text: selectAllButtonTrans,
                exportOptions: {
                  columns: ':visible'
                },
                action: function(e, dt) {
                  e.preventDefault()
                  dt.rows().deselect();
                  dt.rows({ search: 'applied' }).select();
                }
              },
              {
                extend: 'selectNone',
                className: 'btn-primary',
                text: selectNoneButtonTrans,
                exportOptions: {
                  columns: ':visible'
                }
              },
              {
                extend: 'copy',
                className: 'btn-success',
                text: copyButtonTrans,
                exportOptions: {
                  columns: ':visible'
                }
              },
              {
                extend: 'csv',
                className: 'btn-success',
                text: csvButtonTrans,
                exportOptions: {
                  columns: ':visible'
                }
              },
              {
                extend: 'excel',
                className: 'btn-success',
                text: excelButtonTrans,
                exportOptions: {
                  columns: ':visible'
                }
              },
              {
                extend: 'pdf',
                className: 'btn-success',
                text: pdfButtonTrans,
                exportOptions: {
                  columns: ':visible'
                }
              },
              {
                extend: 'print',
                className: 'btn-success',
                text: printButtonTrans,
                exportOptions: {
                  columns: ':visible'
                }
              },
              {
                extend: 'colvis',
                className: 'btn-success',
                text: colvisButtonTrans,
                exportOptions: {
                  columns: ':visible'
                }
              }
            ]
        });

        $.fn.dataTable.ext.classes.sPageButton = '';
    });

    </script>
    
    @yield('scripts')
    
</body>

</html>