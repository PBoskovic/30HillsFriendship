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
          role="button">{{ $fof->firstName . '\'s' }} details </a></p>
</div><!-- /.col-lg-4 -->