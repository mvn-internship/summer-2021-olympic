@extends('admin.layouts.master')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/multiselect/bootstrap-multiselect.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary inline-flex">{{ __('label.pages.user.list') }}</h6>
            <button id="create" class="btn btn-primary btn-icon-split" data-toggle="modal" data-target="#form">
                <span class="icon text-white-50">
                    <i class="fas fa-plus-circle"></i>
                </span>
                <span class="text">{{ __('label.form.create') }}</span>
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ __('label.form.id') }}</th>
                            <th>{{ __('label.form.name') }}</th>
                            <th>{{ __('label.form.email') }}</th>
                            <th>{{ __('label.form.phone') }}</th>
                            <th>{{ __('label.form.address') }}</th>
                            <th>{{ __('label.form.status') }}</th>
                            <th>{{ __('label.form.email_verified_at') }}</th>
                            <th>{{ __('label.form.created_at') }}</th>
                            <th>{{ __('label.form.updated_at') }}</th>
                            <th>{{ __('label.form.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $user)
                            <tr id="row_{{ $key }}">
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>
                                    <button class="btn btn-{{ $user->status ? 'success' : 'warning' }} status"
                                        data-id="{{ $user->id }}">{{ $user->status ? 'Active' : 'Inactive' }}</button>
                                </td>
                                <td>{{ $user->email_verified_at }}</td>
                                <td>{{ $user->created_at }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td>
                                    <button class="  btn btn-warning btn-circle edit" data-id="{{ $user->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('admin.pages.users.form')
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/multiselect/bootstrap-multiselect.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
    <script src="{{ asset('js/admin/user.js') }}"></script>
@endsection
