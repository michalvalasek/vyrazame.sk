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
}