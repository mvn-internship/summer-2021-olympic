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
                <h1 class="text-white">Schedules</h1>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="form-fillter mb-4">
            <div class="card-header d-flex justify-content-between align-items-center py-3">
                <h6 class="m-0 font-weight-bold text-primary inline-flex">Fillter</h6>
            </div>
            <div class="card-body">
                <form action="#">
                    <div class="form-group">
                        <input type="date" class="form-control" placeholder="Match Day">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Team">
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <input type="submit" class="btn btn-primary py-3 px-5" value="Search">
                    </div>
                </form>
            </div>
        </div>
        
    </div>
    <div class="container">
        <div class="widget-next-match">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Match</th>
                        <th>Time</th>
                        <th>Detail Of Match</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>07:00 11/11</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> 

@stop

@section('scripts')

{{--quick defined--}}
<script>
    $(function() {
        // your custom javascript
    });
</script>
@stop