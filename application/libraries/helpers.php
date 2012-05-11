<?php

class Helpers
{
	static public function get_event_type_icon($type)
	{
		$icons = array(
			'drink' => 'icon-glass',
			'culture' => 'icon-music',
			'sport' => 'icon-road',
		);
		return array_key_exists($type, $icons) ? $icons[$type] : '';
	}

	static public function get_event_type_bar_style($type)
	{
		$icons = array(
			'drink' => 'progress-success',
			'culture' => 'progress-warning',
			'sport' => 'progress-danger',
		);
		return array_key_exists($type, $icons) ? $icons[$type] : '';
	}

	static public function attendees_list($attendees)
	{
		if (!count($attendees)) return 'prihlás sa ako prvý!';

		foreach($attendees as $att) {
			$atts[] = $att->name;
		}
		return implode(',', $atts);
	}

	static public function draw_attend_button($event_id)
	{
		$button = '<a href="/event/'.$event_id.'/attend" class="btn btn-primary btn-large">Vyrážam!</a>';

		$attended = Session::get('attended');
		if ($attended==null) $attended = array();
		if (!in_array($event_id,$attended)) return $button;
	}

	static public function formated_event_date($timestamp)
	{
		$daynames = array('Nedeľa','Pondelok', 'Utorok', 'Streda', 'Štvrtok', 'Piatok', 'Sobota');

		$event_date = date('Ymd',$timestamp);
		$today_date = date('Ymd',time());
		$tomorrow_date = date('Ymd',time()+24*60*60);

		$diff = $timestamp - time();

		if ($event_date==$today_date) {
			return "Dnes o " . date('H:i',$timestamp);
		}
		else if ($event_date==$tomorrow_date) {
			return "Zajtra o " . date('H:i',$timestamp);
		}
		else if ($diff < 6*24*60*60) {
			return $daynames[date("w",$timestamp)] . " o " . date('H:i',$timestamp);
		}
		else return date('d.m.Y \o H:i',$timestamp);
	}
}