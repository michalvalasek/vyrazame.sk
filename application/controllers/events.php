<?php

class Events_Controller extends Base_Controller {

	public $layout = 'layouts.default';

	public function action_index()
	{
		$events = Vyrazame\Event::where('date', '>', time())->order_by('date','asc')->get();

		$this->layout->page_header_title = "Udalosti";
		$this->layout->content = View::make('events.index')
			->with('events', $events);
	}

	public function action_new()
	{
		$this->layout->page_header_title = "Nová udalosť";
		$this->layout->content = View::make('events.new');	
	}

	public function action_create()
	{
		$input = Input::all();
		
		$validation = Validator::make($input, Vyrazame\Event::rules());
		if ($validation->fails()) {
			return Redirect::to_route('new_event')->with_errors($validation);
		}
		
		Vyrazame\Event::create($input);
		return Redirect::to_route('root')->with('status', 'Hotovo, môže sa vyraziť!');
	}

	public function action_attend($id)
	{
		$event = Vyrazame\Event::find($id);
		if(empty($event)) {
			return Response::error('404');
		}

		$this->layout->page_header_title = "Zúčastním sa: ".$event->title;
		$this->layout->content = View::make('events.attend')
			->with('event', $event);	
	}

	public function action_will_attend($id)
	{
		$input = Input::all();

		$validation = Validator::make($input, Attendee::rules());
		if ($validation->fails()) {
			return Redirect::to_route('attend',array($id))->with_errors($validation);
		}

		$event = Vyrazame\Event::find($id);
		if(empty($event)) {
			return Response::error('404');
		}
		
		$attended = Session::get('attended');
		if (empty($attended) OR !in_array($id, $attended)) {
			$attended[] = $id;
			Session::put('attended',$attended);

			$attendee = new Attendee($input);
			$attendee->event_id = $id;
			$attendee->save();

			return Redirect::to_route('root')->with('status', 'Hotovo, berieme ťa za slovo!');
		}

		return Redirect::to_route('root')->with('status', 'Už o tebe vieme!');
	}

}