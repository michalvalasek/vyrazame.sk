<?php

class Attendee extends Eloquent
{
	public function event()
	{
		return $this->belongs_to('Vyrazame\Event');
	}
}