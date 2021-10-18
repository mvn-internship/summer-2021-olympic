@extends('admin.layouts.master')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ Lang::get('label.analysis') }}</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="analysisTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>{{ Lang::get('label.number') }}</th>
                            <th>{{ Lang::get('label.match') }}</th>
                            <th>{{ Lang::get('label.team') }}</th>
                            <th>{{ Lang::get('label.rank') }}</th>
                            <th>{{ Lang::get('label.score') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($matchResults as $key => $analysis)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $analysis->matchSoccer->name }}</td>
                            <td>{{ $analysis->team->name }}</td>
                            <td>{{ $analysis->matchSoccer->rank->name }}</td>
                            <td>
                                @if (is_null($analysis->team_point))
                                    {{ 'N/A' }}
                                @else
                                    {{ $analysis->team_point }}
                                @endif
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
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#analysisTable').DataTable( {
                'ordering': false,
            } );
        });
    </script>
@endsection