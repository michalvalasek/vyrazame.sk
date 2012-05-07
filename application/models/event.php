<?php

namespace Vyrazame;

class Event extends \Eloquent
{
	public static $accessible = array('type','title','date','place','description','author');

	public static $timestamps = true;

	public static function rules()
	{
		return array(
			'title' => 'required|max:200',
			'place' => 'required|max:200',
			'author' => 'required|max:200',
			'date' => 'required',
		);
	}

	public function attendees()
	{
		return $this->has_many('Attendee');
	}
}