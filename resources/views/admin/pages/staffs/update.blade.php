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
            <form method="PUT" action="{{ route('api.staffs.update', $userMatch->id) }}" id="form-update-staff">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="user">{{ __('label.user') }}</label>
                    <input type="text" class="form-control" disabled value='{{ $userMatch->user->name }}'>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="match">{{ __('label.match.match') }}</label>
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
                    <label class="form-label" for="role">{{ __('label.role') }}</label>
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
