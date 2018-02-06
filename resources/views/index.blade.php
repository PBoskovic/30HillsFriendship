@extends('layouts.master')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    </div>
    {{--<div class="jumbotron jumbotron-fluid">--}}
        {{--<div class="container">--}}
            {{--<h1 class="display-4">All users</h1>--}}
            {{--<p class="lead">On this page every user stored in a database is being displayed.</p>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            @foreach($users as $user)
                <div class="col-lg-4">
                    <a href="/users/{{$user->id}}">
                        @if($user->gender=='male')
                        <img class="rounded-circle" src="/img/cap.png" alt="Generic placeholder image" width="140"
                             height="140">
                        @endif
                        @if($user->gender=='female')
                        <img class="rounded-circle" src="/img/female.png" alt="Generic placeholder image" width="140"
                             height="140">
                            @endif
                    </a>
                    <h2>{{ $user->firstName .' '. $user->surname }}</h2>
                    <p>Gender: {{$user->gender}} <br>
                        Age: {{$user->age}}</p>
                    <p><a class="btn btn-secondary" href="/users/{{$user->id}}" role="button">{{ $user->firstName . '\'s' }} details </a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach()
        </div><!-- /.row -->
    </div>

@endsection