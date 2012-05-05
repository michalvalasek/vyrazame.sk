<?php

namespace Vyrazame;

class Event extends \Eloquent
{
	public function attendees()
	{
		return $this->has_many('Attendee');
	}
}