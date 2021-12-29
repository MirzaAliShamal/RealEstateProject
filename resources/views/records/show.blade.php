@extends('layouts.app')

@section('title', 'Recod details')

@section('content')

    {{-- {{ dd($user) }} --}}
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Record Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Record Details</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="page-title pl-4">Record Information</h4>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="" class="table">
                            <thead class="thead-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>R No</th>
                                        <th>Name</th>
                                        <th>Father Name</th>
                                        <th>Balance</th>
                                        <th>New NIC</th>
                                        <th>Old NIC</th>
                                    </tr>
                                    <!--end tr-->
                                </thead>
                                <!--end tr-->
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $record->r_no }}</td>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->father_name }}</td>
                                    <td>{{ $record->balance }}</td>
                                    <td>{{ $record->new_nic }}</td>
                                    <td>{{ $record->old_nic }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="page-title pl-4">Record History</h4>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Date</th>
                                    <th>Modifier</th>
                                    <th>R No</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Balance</th>
                                    <th>New NIC</th>
                                    <th>Old NIC</th>
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
                "url": "{{ route('record.show', $record->id) }}",
            },
            columns: [{
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'user_id',
                    name: 'user_id'
                },
                {
                    data: 'r_no',
                    name: 'r_no'
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
                    data: 'balance',
                    name: 'balance'
                },
                {
                    data: 'new_nic',
                    name: 'new_nic'
                },
                {
                    data: 'old_nic',
                    name: 'old_nic'
                },

            ]
        });
    </script>
@endsection
