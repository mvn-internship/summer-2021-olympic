@extends('admin.layouts.master')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update match</h6>
        </div>
        <div class="card-body">
            @if(count($errors)>0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                    {{$err}} <br>
                @endforeach
            </div>
            @endif
            @if (session('notification'))
            <div class="form-label" style="color: blue">{{ session('notification') }}</div>
            @endif
            <p id='notification' class="form-label" style="color: blue"></p>
            <form method="PUT" action="" id="form-update-staff">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="name">{{ __('label.name') }}</label>
                    <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ $match->name }}"> 
                </div>
                <div class="mb-3">
                    <label class="form-label" for="rank">{{ __('label.rank') }}</label>
                    <select class="form-control" id="rank" name="rank_id" >
                        @foreach ($ranks as $rank) 
                        <option value="{{ $rank->id }}"
                            @if ($match->rank_id == $rank->id)
                                selected
                            @endif
                        >{{ $rank->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="match-code">{{ __('label.match-code') }}</label>
                    <input type="text" class="form-control" id="match-code" placeholder="Match Code" name="match_code" value="{{ $match->match_code }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tournament">{{ __('label.tournament') }}</label>
                    <select class="form-control" id="tournament" name="tournament_id" >
                        @foreach ($tournaments as $tournament) 
                        <option value="{{ $tournament->id }}"
                            @if ($match->tournament_id == $tournament->id)
                                selected
                            @endif
                        >{{ $tournament->name }}</option>
                        @endforeach
                    </select>
                    <div class="mb-3">
                        <label class="form-label" for="group">{{ __('label.group') }}</label>
                        <select class="form-control" id="group" name="group_id" >
                            @foreach ($groups as $group) 
                            <option value="{{ $group->id }}"
                                @if ($match->group_id == $group->id)
                                    selected
                                @endif
                            >{{ $group->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button id="btn-submit"  type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/admin/staff/update.js') }}"> </script>
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
@endsection