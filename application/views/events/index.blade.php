@foreach ($events as $event)
<div class="hero-unit">
    <h1>{{$event->title}}</h1>
    <h2>{{date('d.m.Y \o H:i',$event->date)}} - {{$event->place}}</h2>
    <p>{{$event->description}}</p>
    <p><strong>Pozýva:</strong> {{$event->author}}</p>
    <a href="/event/{{$event->id}}/attend" class="btn btn-primary btn-large">Vyrážam!</a>
</div>
@endforeach