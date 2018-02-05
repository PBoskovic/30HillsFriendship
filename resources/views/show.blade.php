@extends('layouts.master')
@section('content')
    <div class="container marketing">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">{{ $user->firstName }} {{ $user->surname }}</h1>
                        <p class="lead"></p>
                    </div>
                </div>
            </div>
            {{--FRIENDS OF USER--}}
            <div class="col-lg-12"><h3>List of {{$user->firstName}}'s friends</h3></div>

            @foreach($user->friends as $friend)
                <div class="col-lg-4">
                    <a href="/users/{{$friend->id}}">
                        @if($friend->gender=='male')
                            <img class="rounded-circle" src="/img/cap.png" alt="Generic placeholder image" width="140"
                                 height="140">
                        @endif
                        @if($friend->gender=='female')
                            <img class="rounded-circle" src="/img/female.png" alt="Generic placeholder image"
                                 width="140"
                                 height="140">
                        @endif
                    </a>
                    <h2>{{ $friend->firstName .' '. $friend->surname }}</h2>
                    <p>Gender: {{$friend->gender}} <br>
                        Age: {{$friend->age}}</p>
                    <p><a class="btn btn-secondary" href="/users/{{$friend->id}}"
                          role="button">{{ $friend->firstName . '\'s' }} details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach

            {{--FRIENDS OF FRIENDS--}}
            {{--<ul class="list-group list-group-flush">--}}
            {{--<li class="list-group-item">Name: {{ $user->firstName }} {{ $user->surname }}</li>--}}
            {{--<li class="list-group-item">Friends:--}}
            {{--@foreach($user->friends as $friend)--}}
            {{--{{ $friend->firstName . ', ' }}--}}
            {{--@endforeach--}}
            {{--</li>--}}

            <div class="col-lg-12">
                <h3> List of friends of {{$user->firstName}}'s friend</h3>
            </div>

            @foreach($user->friends as $friend)

                @foreach($friend->friends as $fof)
                    @if($fof->id != $user->id )

                        <div class="col-lg-4">
                            <a href="/users/{{$fof->id}}">
                                @if($fof->gender=='male')
                                    <img class="rounded-circle" src="/img/cap.png" alt="Generic placeholder image"
                                         width="140"
                                         height="140">
                                @endif
                                @if($fof->gender=='female')
                                    <img class="rounded-circle" src="/img/female.png" alt="Generic placeholder image"
                                         width="140"
                                         height="140">
                                @endif
                            </a>
                            <h2>{{ $fof->firstName .' '. $fof->surname }}</h2>
                            <p>Gender: {{$fof->gender}} <br>
                                Age: {{$fof->age}}</p>
                            <p><a class="btn btn-secondary" href="/users/{{$fof->id}}"
                                  role="button">{{ $fof->firstName . '\'s' }} details &raquo;</a></p>
                        </div><!-- /.col-lg-4 -->
                    @endif
                @endforeach
            @endforeach



            {{--<ul>--}}

            {{--@foreach($user->friends as $friend)--}}
            {{--{{ $friend->firstName . ', ' }}--}}
            {{--@foreach($friend->friends as $ff)--}}
            {{--@if( $ff->id != $user->id)--}}
            {{--{{ $ff->firstName }}--}}
            {{--@endif--}}
            {{--@endforeach--}}
            {{--@endforeach--}}
            {{--</li>--}}
            {{--<li>Prijatelji od prijatelja:--}}
            {{--@foreach($user->friends as $friend)--}}
            {{--@foreach($friend->friends as $ff)--}}
            {{--@if($ff->id != $user->id)--}}
            {{--{{ $ff->firstName . ', ' }}--}}
            {{--@endif--}}
            {{--@endforeach--}}
            {{--@endforeach--}}
            {{--</li>--}}
            {{--</ul>--}}

        </div>
    </div>
@endsection