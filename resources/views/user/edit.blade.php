@extends('layouts.app')

@section('title', 'Edit Staff')

@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('user.list') }}">Staff Member</a></li>
                        <li class="breadcrumb-item active">Edit Staff</li>

                    </ol>
                </div>
                <h4 class="page-title">Edit Staff Member</h4>
            </div><!--end page-title-box-->
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('user.save', $data->id) }}" method="POST" class="card-box">
                        @csrf

                         <div class="form-group row">
                             <div class="col-md-12">
                                 <label for="name"> Name *</label>
                                 <input type="text" placeholder="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $data->name) }}" id="name" autocomplete="off">
                                 @error('name')
                                 <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                             </div>
                        </div>
                         <div class="form-group row">
                             <div class="col-md-12">
                                 <label for="email">Email *</label>
                                 <input type="text" placeholder="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', $data->email) }}" id="email" autocomplete="off" >
                                 @error('email')
                                 <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror
                             </div>
                        </div>
                        <div class="form-group">
                            <a href="{{ route('user.list') }}" class="btn btn-danger btn-sm text-light px-4 mt-3 float-right mb-0 ml-2">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm text-light px-4 mt-3 float-right mb-0">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
