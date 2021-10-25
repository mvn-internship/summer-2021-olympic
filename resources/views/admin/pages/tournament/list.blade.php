@extends('admin.layouts.master')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <style>
        .card-header { 
            display: inline;
        } 
        .btn-end {
            float: right;
        }
    </style>
@endsection

@section('content')
    @if( request()->get('success'))
        <div class="alert alert-success" role="alert">
            {{ request()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session('fail'))
        <div class="alert alert-success" role="alert">
            {{ session('fail') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ __('label.tournament') }}</h6>
            <a href="{{route('admin.createTournament')}}" class="btn btn-success btn-end"><i class="fas fa-plus"></i> {{ __('label.add') }}</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            @if($listTournaments->count() == 0)
                <h5>No tournaments exist</h5>
            @else
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ __('label.no') }}</th>
                            <th>{{ __('label.name') }}</th>
                            <th>{{ __('label.start_date') }}</th>
                            <th>{{ __('label.end_date') }}</th>
                            <th>{{ __('label.teams') }}</th>
                            <th>{{ __('label.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($listTournaments as $key => $tournament)
                            <tr id="row_{{ $key }}">
                                <td>{{ $key+1 }}</td>
                                <td>{{ $tournament->name }}</td>
                                <td>{{ date('d-m-Y', strtotime($tournament->start_date)) }}</td>
                                <td>{{ date('d-m-Y', strtotime($tournament->end_date)) }}</td>
                                <td>{{ $tournament->organization_tournaments_count }}</td>
                                <td>
                                    <div class="row ml-1">
                                        <a class="mr-2" href="{{ route('admin.editTournament', $tournament->id) }}">
                                            <button class="btn btn-warning btn-circle edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </a>
                                        <form action="{{ route('admin.deleteTournament', $tournament->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure delete this tournament?')" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

@endsection
