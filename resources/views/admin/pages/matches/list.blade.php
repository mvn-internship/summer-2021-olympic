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
                            <th>{{ __('label.rank.rank') }}</th>
                            <th>{{ __('label.match.match-code') }}</th>
                            <th>{{ __('label.tournament.tournament') }}</th>
                            <th>{{ __('label.group.group') }}</th>
                            <th>{{ __('label.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matches as $match)
                        <tr>
                            <td>{{  $match->name  }}</td>
                            <td>{{ $match->rank->name }}</td>
                            <td>{{ $match->match_code }}</td>
                            <td>{{ $match->tournament->name }}</td>
                            <td>{{ $match->group->name }}</td>
                            <td>
                                <a href="{{ route('matches.edit', $match->id) }}" class="btn btn-info btn-circle btn-sm">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                                <a href="{{ route('matches.results', $match->id) }}" class="btn btn-success btn-circle btn-sm">
                                    <i class="fas fa-poll" ></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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