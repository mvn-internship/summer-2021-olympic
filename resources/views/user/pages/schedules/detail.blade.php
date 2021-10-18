@extends('user.layouts.master')

@section('title', 'Schedule')

@section('style-libraries')
@stop

@section('styles')
{{--custom css item suggest search--}}
<style>
    .yellow:before {
        content: "*";
        color: yellow;
    }
    .red:before {
        content: "*";
        color: red;
    }

</style>
@stop

@section('content')

<div class="hero overlay" style="background-image: url('user-common/images/bg_3.jpg');">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mx-auto text-center">
                <h1 class="text-white">Details Of The Match</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex team-vs">
                <span class="score">4-1</span>
                <div class="team-1 w-50">
                    <div class="team-details w-100 text-center">
                        <img src="" alt="Image logo of team" class="img-fluid">
                        <h3>Korea <span>(win)</span></h3>
                        <ul class="list-unstyled">
                            <li>Anja Landry (7)</li>
                            <li>Eadie Salinas (12)</li>
                        </ul>
                    </div>
                </div>
                <div class="team-2 w-50">
                    <div class="team-details w-100 text-center">
                        <img src="" alt="Image logo of team" class="img-fluid">
                        <h3>UAE <span>(loss)</span></h3>
                        <ul class="list-unstyled">
                            <li>Macauly Green (3)</li>
                            <li>Arham Stark (8)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading">Detailed results</h2>
            </div>
        </div>
        <div class="widget-next-match">
            <table class="table custom-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Korea</th>
                        <th>UAE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong class="text-white">Score</strong></td>
                        <td>4</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td><strong class="text-white">Penalty card</strong></td>
                        <td>
                            <ul class="list-unstyled">
                                <li class="yellow"> 1</li>
                                <li class="red"> 2</li>
                            </ul>
                        </td>
                        <td>
                            <ul class="list-unstyled">
                                <li class="yellow"> 0</li>
                                <li class="red"> 2</li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="site-section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading">Match info</h2>
            </div>
        </div>
        <div>
            <ul>
                <li>Time: 11/12/2021 17:00 PM</li>
                <li>competition rank: U23 Male</li>
                <li>Referee:
                    <ul>
                        <li>Mr Thưởng</li>
                        <li>Mr Đạt</li>
                        <li>Mr Tuấn</li>
                    </ul>
                </li>
                <li>Competition venue: <a href="https://en.wikipedia.org/wiki/M%E1%BB%B9_%C4%90%C3%ACnh_National_Stadium" target="_blank">Mỹ Đình National Stadium</a> </li>
            </ul>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-12 title-section">
                <h2 class="heading">Information the team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 team-1">
                <table class="table custom-table text-center">
                    <thead>
                        <tr>
                            <th>Korea</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong class="text-white">Coach: Coach of Korea</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 1</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 2</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 3</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 4</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 5</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 6</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 7</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 8</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 9</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 10</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <table class="table custom-table text-center">
                    <thead>
                        <tr>
                            <th>UAE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong class="text-white">Coach: Coach of UAE</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 1</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 2</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 3</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 4</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 5</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 6</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 7</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 8</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 9</strong></td>
                        </tr>
                        <tr>
                            <td><strong class="text-white">Member 10</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
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