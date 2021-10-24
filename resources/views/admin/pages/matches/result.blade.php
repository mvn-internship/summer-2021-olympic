@extends('admin.layouts.master')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{  $match->name }} match results</h6>
        </div>
        <div class="card-body">
        @if (empty($secs))
            <p>Match results are being updated </p>
        @else
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th class="col-sm-2">Sec</th>
                        <th style="text-align: center">{{ $pointTeam1[0]->team->name }}</th>
                        <th style="text-align: center">{{ $pointTeam2[0]->team->name }}</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 0;
                        @endphp
                        @foreach ($secs as $sec)
                        <tr>
                            <td>{{ $sec->sec }}</td>
                            <td style="text-align: center">{{ $pointTeam1[$count]->team_point }}</td>
                            <td style="text-align: center">{{ $pointTeam2[$count]->team_point }}</td>
                        </tr>
                        @php
                            $count ++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
        </div>
    </div>
@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection
