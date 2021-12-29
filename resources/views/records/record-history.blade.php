@extends('layouts.app')

@section('title', 'Record History')

@section('content')

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Record History</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row p-3">
        <div class="col-lg-3">
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
                                <p class="mb-1 text-muted">Total Records</p>
                                <input class=" h3 mt-0 mb-1 font-weight-semibold text-center" name="total_stock"
                                    id="total_stock" value="{{ totalRecordUpdationRecord() }}" readonly
                                    style="background: transparent; border: none;margin-left: -30px">
                            </div>
                        </div>
                    </div>

                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="icon-info">
                                <i data-feather="users" class="align-self-center icon-lg icon-dual-purple"></i>
                            </div>
                        </div>
                        <div class="col-8 align-self-center text-right">
                            <div class="ml-2">
                                <p class="mb-1 text-muted">Pending </p>
                                <input class=" h3 mt-0 mb-1 font-weight-semibold text-center" name="low_in_stock"
                                    id="low_in_stock" value="{{ totalPendingUpdationRecord() }}" readonly
                                    style="background: transparent; border: none;margin-left: -30px">
                            </div>
                        </div>
                    </div>

                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="icon-info">
                                <i data-feather="headphones" class="align-self-center icon-lg icon-dual-success"></i>
                            </div>
                        </div>
                        <div class="col-8 align-self-center text-right">
                            <div class="ml-2">
                                <p class="mb-0 text-muted">Approved</p>
                                <input class=" h3 mt-0 mb-1 font-weight-semibold text-center" name="active_products"
                                    id="active_products" value="{{ totalApprovedUpdationRecord() }}" readonly
                                    style="background: transparent; border: none;margin-left: -30px">
                            </div>
                        </div>
                    </div>

                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4 align-self-center">
                            <div class="icon-info">
                                <i data-feather="headphones" class="align-self-center icon-lg icon-dual-success"></i>
                            </div>
                        </div>
                        <div class="col-8 align-self-center text-right">
                            <div class="ml-2">
                                <p class="mb-0 text-muted">Rejected</p>
                                <input class=" h3 mt-0 mb-1 font-weight-semibold text-center" name="disable_products"
                                    id="disable_products" value="{{ totalRejectedUpdationRecord() }}" readonly
                                    style="background: transparent; border: none;margin-left: -30px">
                            </div>
                        </div>
                    </div>

                </div>
                <!--end card-body-->
            </div>
            <!--end card-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

    <div class="row">
        <div class="col-md-8 offset-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="record_filter">Select Filter*</label>
                        <select name="record_filter" id="record_filter" class="form-control select2"
                            onchange="filterItem()">
                            <option value="">No filter selected</option>
                            <option value="pending">Pending</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>
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
                                <th>Update Status</th>
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
                "url": "{{ route('record-history.list') }}",
                "data": function(d) {
                    d.record_filter = $('[name="record_filter"]').val();
                }
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
                    data: 'update_status',
                    name: 'update_status'
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

        function filterItem() {

            $.ajax({
                type: "GET",
                url: "{{ route('record-history.pending.list') }}",
                data: {
                    from: $('[name="record_filter"]').val(),
                },
                success: function(response) {
                    if (response.status == 200) {
                        $("#record_filter").val(response.data);
                    }
                }
            });
            table.ajax.reload();

        }
    </script>
@endsection
