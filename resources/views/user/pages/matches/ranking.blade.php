@extends('user.layouts.master')

@section('title', 'Schedule')

@section('style-libraries')
@stop

@section('styles')
{{--custom css item suggest search--}}
<style>
    .card-header {
        background-color: #00000073;
    }
    .site-section {
        padding: 50px;
    }
    .form-fillter {
        border: 2px solid gray;
    }
</style>
@stop

@section('content')

<div class="hero overlay" style="background-image: url('user-common/images/bg_3.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto text-center">
                <h1 class="text-white">Competion Ranking</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading">Schedules</h2>
            </div>
        </div>
        <div class="form-search-schedule mb-5">
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="exampleInputPassword1">Choose a team</label>
                        <select class="custom-select mr-sm-2" onchange="tournament(this);" id="tournament">
                            <option selected>Choose...</option>
                            @foreach ($tournaments as $tournament)
                                <option value="{{ $tournament->id }}">{{ $tournament->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
        </div>
        <div class="table-schedule">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Team</th>
                        <th>Medal</th>
                        <th>Win</th>
                        <th>Lose</th>
                        <th>Draw</th>
                        <th>Point </th>
                    </tr>
                </thead>
                <tbody id="table-result">
                    @if (isset($notification))
                        <tr>
                            <td>
                                {{ $notification}}
                            </td>
                        </tr>
                    @else
                        @php
                        $i = 1;
                        @endphp
                        @foreach ($points as $point)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td><strong class="text-white">{{ $point['name'] }}</strong></td>
                            <td><img src="#"></td>
                            <td>{{ $point['win'] }}</td>
                            <td>{{ $point['lose'] }}</td>
                            <td>{{ $point['draw'] }}</td>
                            <td>{{ $point['point'] }}</td>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop

@section('scripts')

<script src="{{ asset('js/user/ranking.js') }}"></script>
{{--quick defined--}}
<script>
    $(function() {
        // your custom javascript
    });
</script>
@stop