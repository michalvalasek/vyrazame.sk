<?php

class Events_Controller extends Base_Controller {

	public $layout = 'layouts.default';

	public function action_index()
	{
		$events = Vyrazame\Event::all();

		$this->layout->page_header_title = "Udalosti";
		$this->layout->content = View::make('events.index')
			->with('events', $events);
	}

	public function action_new()
	{
		$this->layout->page_header_title = "Nová udalosť";
		$this->layout->content = View::make('events.new');	
	}

	public function action_attend($id)
	{
		$event = Vyrazame\Event::find($id);
		$this->layout->page_header_title = "Zúčastním sa: ".$event->title;
		$this->layout->content = View::make('events.attend')
			->with('event', $event);	
	}

}