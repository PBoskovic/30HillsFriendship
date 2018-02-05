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
                @include('layouts.friends.friends')
            @endforeach

            {{--FRIENDS OF FRIENDS--}}

            <div class="col-lg-12 custom">
                <h3> List of friends of {{$user->firstName}}'s friend</h3>
            </div>

            <?php  $listf = [];
            $listFof = [];?>
            @foreach($user->friends as $friend)
                <?php  $listf[] = $friend->id; ?>
            @endforeach

            @foreach($user->friends as $friend)
                @foreach($friend->friends as $fof)
                    <?php $listFof[] = $fof->id; ?>
                @endforeach
            @endforeach

            <?php ?>
            @foreach($user->friends as $friend)
                @foreach($friend->friends as $fof)
                    @if($fof->id != $user->id && $fof->id!= $friend->id && !in_array($fof->id,$listf))
                        @include('layouts.friends.friendsOfFriends')
                    @endif
                @endforeach
            @endforeach

            {{--SUGGESTED FRIENDS--}}
            <div class="col-lg-12 custom">
                <h3> Suggested friends for {{$user->firstName}}</h3>
            </div>

            <?php function array_count_values_of($value, $array)
            {
                $counts = array_count_values($array);
                return $counts[$value];
            }
//            dd($listFofU=array_unique($listFof));
            ?>
            @foreach($user->friends as $friend)
                @foreach($friend->friends as $fof)
                    @if($fof->id != $user->id && $fof->id!= $friend->id && !in_array($fof->id,$listf) && array_count_values_of($fof->id,$listFof)>1)
                        @include('layouts.friends.friendsOfFriends')

                    @endif
                @endforeach
            @endforeach


        </div>
    </div>
@endsection