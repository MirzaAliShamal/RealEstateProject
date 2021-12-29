@extends('layouts.app')

@section('title', 'Staff Information')

@section('content')

    {{-- {{ dd($user) }} --}}
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">Staff Details</li>
                    </ol>
                </div>
                <h4 class="page-title">Staff Details</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <h4 class="page-title pl-4">User Information</h4>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="" class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    {{-- <th class="text-right">Action</th> --}}
                                </tr>
                                <!--end tr-->
                            </thead>
                            <tbody>
                                <tr>
                                    <td><img src="{{ asset($user->photo) }}" class="img-fluid thumb-md rounded" /></td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
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
                "url": "{{ route('user.show', $user->id) }}",
            },
            columns: [{
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
