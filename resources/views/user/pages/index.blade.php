@extends('user.layouts.master')

@section('title', 'App - Top Page')

@section('style-libraries')
@stop

@section('styles')
{{--custom css item suggest search--}}
<style>
    .form-control {
        background-color: #fff;
        color: #495057 !important;
    }
</style>
@stop

@section('content')
<div class="hero overlay" style="background-image: url('user-common/images/bg_3.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 ml-auto">
                <h1 class="text-white">The Next Match</h1>
                <h3>Korea - UAE</h3>
                <div id="date-countdown"></div>
                <p>
                    <a href="{{ route('user.showsDetailSchedule') }}" class="btn btn-primary py-3 px-4 mr-3">Learn More</a>
                </p>
            </div>
        </div>
    </div>
</div>


<div class="site-section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading">Schedules</h2>
            </div>
        </div>
        <div class="form-search-schedule mb-5">
            <form>
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="">Choose a match date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="exampleInputPassword1">Choose a team</label>
                        <select class="custom-select mr-sm-2">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <div class="table-schedule">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Match</th>
                        <th>Time</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>05/04/2021 7:00 PM</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>05/04/2021 7:00 PM</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>05/04/2021 7:00 PM</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>05/04/2021 7:00 PM</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong class="text-white">Korea - UAE</strong></td>
                        <td>05/04/2021 7:00 PM</td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading">Result</h2>
            </div>
        </div>
        <div class="form-search-schedule mb-5">
            <form>
                <div class="row">
                    <div class="col-lg-6 form-group">
                        <label for="">Choose a match date</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="exampleInputPassword1">Choose a team</label>
                        <select class="custom-select mr-sm-2">
                            <option selected>Choose...</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
        </div>
        <div class="table-schedule">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Time</th>
                        <th class="text-center">Score</th>
                        <th>Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>05/04/2021 7:00 PM</td>
                        <td class="text-center"><strong class="text-white">Korea 1 - 2 UAE</strong></td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>05/04/2021 7:00 PM</td>
                        <td class="text-center"><strong class="text-white">Korea 1 - 2 UAE</strong></td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>05/04/2021 7:00 PM</td>
                        <td class="text-center"><strong class="text-white">Korea 1 - 2 UAE</strong></td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>05/04/2021 7:00 PM</td>
                        <td class="text-center"><strong class="text-white">Korea 1 - 2 UAE</strong></td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>05/04/2021 7:00 PM</td>
                        <td class="text-center"><strong class="text-white">Korea 1 - 2 UAE</strong></td>
                        <td><a href="{{ route('user.showsDetailSchedule') }}"><button class="btn btn-primary">View Detail <i class="fas fa-eye"></i></button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- .site-section -->

@stop

@section('scripts')
{{--quick defined--}}
<script>
    $(document).ready(function() {
    });
</script>
@stop