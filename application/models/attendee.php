<?php

class Attendee extends Eloquent
{
	public static $accessible = array('name');

	public static $timestamps = true;

	public static function rules()
	{
		return array(
			'name' => 'required|max:200',
		);
	}

	public function event()
	{
		return $this->belongs_to('Vyrazame\Event');
	}
}