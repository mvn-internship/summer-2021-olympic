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
            <form>
                <div class="row">
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
                        <th>Team</th>
                        <th>Medal</th>
                        <th>M</th>
                        <th>W</th>
                        <th>L</th>
                        <th>P</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong class="text-white">Football League</strong></td>
                        <td><img src="gold-medal.png"></td>
                        <td>22</td>
                        <td>3</td>
                        <td>2</td>
                        <td>140</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong class="text-white">Soccer</strong></td>
                        <td><img src="second-prize.png"></td>
                        <td>22</td>
                        <td>3</td>
                        <td>2</td>
                        <td>140</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong class="text-white">Juvendo</strong></td>
                        <td><img src="bronze-medal.png"></td>
                        <td>22</td>
                        <td>3</td>
                        <td>2</td>
                        <td>140</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong class="text-white">French Football League</strong></td>
                        <td></td>
                        <td>22</td>
                        <td>3</td>
                        <td>2</td>
                        <td>140</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong class="text-white">Legia Abante</strong></td>
                        <td></td>
                        <td>22</td>
                        <td>3</td>
                        <td>2</td>
                        <td>140</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><strong class="text-white">Gliwice League</strong></td>
                        <td></td>
                        <td>22</td>
                        <td>3</td>
                        <td>2</td>
                        <td>140</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><strong class="text-white">Cornika</strong></td>
                        <td></td>
                        <td>22</td>
                        <td>3</td>
                        <td>2</td>
                        <td>140</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><strong class="text-white">Gravity Smash</strong></td>
                        <td></td>
                        <td>22</td>
                        <td>3</td>
                        <td>2</td>
                        <td>140</td>
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