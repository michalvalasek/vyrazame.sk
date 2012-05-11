@foreach ($events as $event)
<div class="hero-unit">
    <div class="progress {{Helpers::get_event_type_bar_style($event->type)}}">
  		<div class="bar" style="width: 100%;"></div>
	</div>
    <h1>{{ $event->title }}</h1>
    <h2>{{ Helpers::formated_event_date($event->date) }} - {{ $event->place }}</h2>
    @if ($event->description)
    <p>{{ $event->description }}</p>
    @endif
    <p><strong>Pozýva:</strong> {{ $event->author }}</p>
    <p><strong>Vyrážajú:</strong> {{ Helpers::attendees_list($event->attendees) }}</p>

	{{ Helpers::draw_attend_button($event->id) }}
</div>
@endforeach