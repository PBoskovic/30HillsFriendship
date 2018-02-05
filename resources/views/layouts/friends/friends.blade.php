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
          role="button">{{ $friend->firstName . '\'s' }} details </a></p>
</div><!-- /.col-lg-4 -->