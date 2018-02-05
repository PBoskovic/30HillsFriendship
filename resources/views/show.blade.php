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
            <div class="col-lg-12 custom"><h3>List of {{$user->firstName}}'s friends</h3></div>
            @foreach($user->friends as $friend)
                @include('layouts.friends')
            @endforeach

            {{--FRIENDS OF FRIENDS--}}
            {{--<ul class="list-group list-group-flush">--}}
            {{--<li class="list-group-item">Name: {{ $user->firstName }} {{ $user->surname }}</li>--}}
            {{--<li class="list-group-item">Friends:--}}
            {{--@foreach($user->friends as $friend)--}}
            {{--{{ $friend->firstName . ', ' }}--}}
            {{--@endforeach--}}
            {{--</li>--}}
            <div class="col-lg-12 custom">
                <h3> List of friends of {{$user->firstName}}'s friend</h3>
            </div>
            @foreach($user->friends as $friend)
              <?php  $listf[]=$friend->id; ?>
                @foreach($friend->friends as $fof)
                    @if($fof->id != $user->id && $fof->id!= $friend->id && !in_array($fof->id,$listf))
                        @include('layouts.friendsOfFriends')
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