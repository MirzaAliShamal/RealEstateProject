@extends('layouts.app')

@section('title', 'Edit Record')

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Client Data</a></li>
                        <li class="breadcrumb-item active">Edit Record</li>

                    </ol>
                </div>
                <h4 class="page-title">Edit Record</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('record.save', $data->id) }}" method="POST" class="card-box">
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="r_no">R no</label>
                                    <input type="text" name="r_no" class="form-control" value="{{ $data->r_no }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="r_no">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $data->name }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="form-group">
                                    <label for="r_no">Father Name</label>
                                    <input type="text" name="father_name" class="form-control"
                                        value="{{ $data->father_name }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="r_no">Balance</label>
                                        <input type="text" name="balance" class="form-control"
                                            value="{{ $data->balance }}" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Option</label>
                                    <input type="text" name="option" class="form-control" value="{{ $data->option }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Status</label>
                                    <input type="text" name="status" class="form-control" value="{{ $data->status }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Bps</label>
                                    <input type="text" name="bps" class="form-control" value="{{ $data->bps }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Birth</label>
                                    <input type="text" name="birth" class="form-control" value="{{ $data->birth }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Retirement</label>
                                    <input type="text" name="retirement" class="form-control"
                                        value="{{ $data->retirement }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Death</label>
                                    <input type="text" name="death" class="form-control" value="{{ $data->death }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">New NIC</label>
                                    <input type="text" name="new_nic" class="form-control"
                                        value="{{ $data->new_nic }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Old NIC</label>
                                    <input type="text" name="old_nic" class="form-control"
                                        value="{{ $data->old_nic }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Demand</label>
                                    <input type="text" name="demand" class="form-control"
                                        value="{{ $data->demand }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Pifra</label>
                                    <input type="text" name="pifra" class="form-control" value="{{ $data->pifra }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Designation</label>
                                    <input type="text" name="designation" class="form-control"
                                        value="{{ $data->designation }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">House No</label>
                                    <input type="text" name="h_no" class="form-control" value="{{ $data->h_no }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Street</label>
                                    <input type="text" name="street" class="form-control"
                                        value="{{ $data->street }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Colony</label>
                                    <input type="text" name="colony" class="form-control"
                                        value="{{ $data->colony }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">City</label>
                                    <input type="text" name="city" class="form-control" value="{{ $data->city }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Posting</label>
                                    <input type="text" name="posting" class="form-control"
                                        value="{{ $data->posting }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Final</label>
                                    <input type="text" name="final" class="form-control" value="{{ $data->final }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Phone Home</label>
                                    <input type="text" name="phone_home" class="form-control"
                                        value="{{ $data->phone_home }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Mobile</label>
                                    <input type="text" name="mobile" class="form-control"
                                        value="{{ $data->mobile }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Documents</label>
                                    <input type="text" name="documents" class="form-control"
                                        value="{{ $data->documents }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">Balating</label>
                                    <input type="text" name="balating" class="form-control"
                                        value="{{ $data->balating }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">New No</label>
                                    <input type="text" name="new_no" class="form-control"
                                        value="{{ $data->new_no }}" />
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-6">
                                <div class="form-group">
                                    <label for="r_no">D_Call</label>
                                    <input type="text" name="d_call" class="form-control"
                                        value="{{ $data->d_call }}" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comment">Comment</label>
                                    <textarea class="form-control" name="comment"> {{ $data->comment }} </textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="#" class="btn btn-danger btn-sm text-light px-4 mt-3 float-right mb-0 ml-2">Print</a>
                            <a href="{{ route('record.pdf', $data->id) }}"
                                class="btn btn-success btn-sm text-light px-4 mt-3 float-right mb-0 ml-2">Download Pdf</a>
                            <button type="submit"
                                class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
