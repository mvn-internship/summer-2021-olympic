@extends('admin.layouts.master')

@section('styles')
    <!-- Custom styles for this page -->
    <!-- Latest compiled and minified CSS -->
    <link href="{{ asset('vendor/multiselect/bootstrap-multiselect.css') }}" type="text/css">
    <link href="{{ asset('vendor/datepicker/css/datepicker.css') }}" rel="stylesheet">
    <style>
        .btn-back {
            color: #000;
            background-color: lightgrey;
        }
        .required:after {
            content: "*";
            color: red;
        }
        .alert-error {
            color: red;
        }
    </style>

@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header d-flex justify-content-between align-items-center py-3">
            <h6 class="m-0 font-weight-bold text-primary inline-flex">{{ __('label.create_tournament') }}</h6>
        </div>
        <div class="card-body">
            <form method="POST" id="createTournament">
            @csrf
                <!-- Form Row-->
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="required" for="name">{{ __('label.name_tournament') }}</label>
                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter user name"
                            value="">
                        <span id="nameError"></span>
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <label class="required" for="phone">{{ __('label.start_date') }}</label>
                        <input type="text" id="startDate" name="startDate" class="form-control" autocomplete="off">
                        <span id="startDateError"></span>
                    </div>
                    <div class="col-md-6">
                        <label class="required" for="password">{{ __('label.end_date') }}</label>
                        <input type="text" id="endDate" name="endDate" class="form-control" autocomplete="off">
                        <span id="endDateError"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label class="required">{{ __('label.add_team_tournament') }}</label>
                    </div>
                </div>
                <div class="row gx-3 mb-3">
                    <div class="col-md-6">
                        <select id="team" name="team" multiple="multiple" hidden>
                            @foreach($teams as $team)
                                <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                        <span id="teamError"></span>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">{{ __('label.add') }}</button>
                <a href="{{ route('admin.tournament') }}" class="btn btn-back">{{ __('label.back') }}</a>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/multiselect/bootstrap-multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/datepicker/js/bootstrap-datepicker.js') }}"></script>
    <!-- Page level plugins -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('#team').multiselect({
                buttonWidth:'100%'
            });

            'use strict';
            var nowTemp = new Date();
            var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

            var checkin = $('#startDate').datepicker({
                onRender: function (date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                }
                checkin.hide();
                $('#endDate')[0].focus();
            }).data('datepicker');
            var checkout = $('#endDate').datepicker({
                onRender: function (date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                }
            }).on('changeDate', function (ev) {
                checkout.hide();
            }).data('datepicker');

            $("#createTournament").submit(function (event) {
                var data = {
                    name: $("#name").val(),
                    start_date: $("#startDate").val(),
                    end_date: $("#endDate").val(),
                    team: $("#team").val(),
                };
                $.ajax({
                    url: "/api/storeTournament",
                    dataType: "html",
                    type: "POST",
                    data: data,
                    success: function(response){ // What to do if we succeed
                        window.location = '/admin/tournament?success=' + response;
                    },
                    error: function (error) {
                        var repsponseError = JSON.parse(error.responseText);

                        repsponseError.name
                            ? $("#nameError").text(repsponseError.name).addClass("alert-error") : null;
                        repsponseError.start_date
                            ? $("#startDateError").text(repsponseError.start_date).addClass("alert-error") : null;
                        repsponseError.end_date
                            ? $("#endDateError").text(repsponseError.end_date).addClass("alert-error") : null;
                        repsponseError.team
                            ? $("#teamError").text(repsponseError.team).addClass("alert-error") : null;
                    }
                });
                event.preventDefault();
            });
        });
    </script>
@endsection
