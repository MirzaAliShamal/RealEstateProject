@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class=" m-2 col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="icon-info">
                                <i data-feather="smile" class="align-self-center icon-lg icon-dual-warning"></i>
                            </div>
                        </div>
                        <div class="col-8 align-self-center text-right">
                            <div class="ml-2">
                                <p class="mb-1 text-muted">Total Records </p>
                                <input class=" h3 mt-0 mb-1 font-weight-semibold text-center" name="" id=""
                                    value="{{ totalRecord() }}" readonly
                                    style="background: transparent; border: none;margin-left: -40px">
                            </div>
                        </div>
                    </div>
                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>R No</th>
                                    <th>Balance</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>New NIC</th>
                                    <th>Old NIC</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                <!--end tr-->
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
@section('js')
    <script>
        // Datatable
        let table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            lengthMenu: [10, 50, 100, 500, 1000],
            pageLength: 500,

            ajax: {
                "url": "{{ route('dashboard') }}",
            },
            columns: [{
                    data: 'r_no',
                    name: 'r_no'
                },
                {
                    data: 'balance',
                    name: 'balance'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'father_name',
                    name: 'father_name'
                },
                {
                    data: 'new_nic',
                    name: 'new_nic'
                },
                {
                    data: 'old_nic',
                    name: 'old_nic'
                },

                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    class: 'text-right'
                },
            ]
        });
    </script>
@endsection
