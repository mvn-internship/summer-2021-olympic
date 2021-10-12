@extends('admin.layouts.master')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List of match</h6>
        </div>
        <div class="card-body">
            @if (session('notification'))
            <div class="form-label" style="color: blue">{{ session('notification') }}</div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ __('label.name') }}</th>
                            <th>{{ __('label.match') }}</th>
                            <th>{{ __('label.role') }}</th>
                            <th>{{ __('label.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($userMatches as $userMatch)
                        <tr>
                            <td>{{  $userMatch->user->name  }}</td>
                            <td>{{ $userMatch->matchSoccer->name }}</td>
                            <td>{{ $userMatch->role->name }}</td>
                            <td>
                                <a href="{{ route('staff.edit', $userMatch->id) }}" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <button class="btn btn-danger btn-circle btn-sm btn-delete" data-toggle="modal" data-url="{{ route('staff.destroy', $userMatch->id) }}" data-target="#exampleModal">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete confirmation?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="modal-body">
                <h3>Are you sure to delete?</h3>
            </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <form id="form-delete"  method="post" enctype="multipart/form" action="">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Yes, I'm sure" class="btn btn-danger">
                    </form>
                </div>
            </div>
        </div>
    </div>
  
@endsection

@section('scripts')

    <script src="{{ asset('js/admin/staff/list.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection