@extends('admin.layouts.master')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Update role for staff in match</h6>
        </div>
        <div class="card-body">
            @if (session('notification'))
            <div class="form-label" style="color: blue">{{ session('notification') }}</div>
            @endif
            <form method="POST" action="{{ route('staff.update', $userMatch->id) }}" >
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="user">User</label>
                    <input type="text" class="form-control" disabled value='{{ $userMatch->user->name }}'>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="match">Match</label>
                    <select class="form-control" id="match" name="match_id" >
                        @foreach ($matchSoccers as $matchSoccer)  
                        <option value="{{ $matchSoccer->id }}"
                            @if ($userMatch->match_id == $matchSoccer->id)
                                selected
                            @endif    
                        >{{ $matchSoccer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="role">Role</label>
                    <select class="form-control" id="role" name="role_id" >
                        @foreach ($roles as $role) 
                        <option value="{{ $role->id }}"
                            @if ($userMatch->role_id == $role->id)
                                selected
                            @endif
                        >{{ $role->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
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
