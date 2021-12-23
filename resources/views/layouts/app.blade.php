<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title') - Real Estate Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- DataTables -->
        <link href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Sweet Alert -->
        <link href="{{ asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/animate/animate.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/dropify/css/dropify.min.css') }}" rel="stylesheet">

        <!-- Select2 -->
        <link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Apex Charts -->
        <link href="{{ asset('plugins/apexcharts/dist/apexcharts.css') }}" rel="stylesheet" type="text/css" />

        <!-- Datepicker -->
        {{-- <link rel="stylesheet" type="text/css" href="jquery.datetimepicker.css" / > --}}
        <link href="{{ asset('plugins/timepicker/bootstrap-material-datetimepicker.css') }}" rel="stylesheet">

        <!-- Toastr -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

        <!-- Autocomplete jQuery -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.css" rel="stylesheet">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />

        @yield('css')
    </head>

    <body data-layout="horizontal">

         <!-- Top Bar Start -->
         <div class="topbar">

            <div class="topbar-inner">
                @include('components.header')
            </div><!--topbar-inner-->
        </div>
        <!-- Top Bar End -->

        <div class="navbar-custom-menu">
            <div class="container-fluid">
                <div id="navigation">
                    <!-- Navigation Menu-->
                    @include('components.nav')
                </div> <!-- end navigation -->
            </div> <!-- end container-fluid -->
        </div> <!-- end navbar-custom -->

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content">

                <div class="container-fluid">
                    @yield('content')
                </div><!-- container -->

                <footer class="footer text-center text-sm-left">
                    <div class="boxed-footer">
                        &copy; 2022 RealEstate <span class="text-muted d-none d-sm-inline-block float-right">Crafted with <i class="mdi mdi-heart text-danger"></i> by Inbound Agency</span>
                   </div>
                </footer><!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <form action="{{ route('logout') }}" method="POST" id="logout-form">@csrf</form>
        <div class="loading">Loading&#8230;</div>


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('assets/js/metismenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/feather.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.min.js') }}"></script>

        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

        <!-- Sweet-Alert  -->
        <script src="{{ asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('plugins/dropify/js/dropify.min.js') }}"></script>

        <!-- Select2 -->
        <script src="{{ asset('plugins/select2/select2.min.js') }}"></script>

        <!-- Toastr  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <!-- Datepicker  -->
        {{-- <script src="/build/jquery.datetimepicker.full.min.js"></script> --}}
        <script src="{{ asset('plugins/moment/moment.js') }}"></script>
        <script src="{{ asset('plugins/timepicker/bootstrap-material-datetimepicker.js') }}"></script>

        <!-- Autocomplete jQuery  -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-autocomplete/1.0.7/jquery.auto-complete.min.js"></script>
       <script src="{{ asset('plugins/apexcharts/dist/apexcharts.js') }}"></script>
        <!-- App js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>
        @if(session('success'))
            <script>
                toastr.success("{{ session('success') }}", {timeOut: 10000})
            </script>
        @endif
        @if(session('error'))
            <script>
                toastr.danger("{{ session('error') }}")
            </script>
        @endif

        <script>
            $(".dropify").dropify();
            $(".select2").select2({
                width: '100%'
            });
            $(".datepicker").bootstrapMaterialDatePicker({
                weekStart : 0,
                time: false,
                format: 'DD-MM-YYYY',
                minDate : new Date()
            });
            $(".filter").bootstrapMaterialDatePicker({
                weekStart : 0,
                time: false,
                format: 'DD-MM-YYYY',

            });
            function deleteMsg(url) {
                swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: true
                }).then(function(result) {
                    if (result.value) {
                        location.href = url;
                    }
                })
            }
        </script>

        @yield('js')
    </body>
</html>
