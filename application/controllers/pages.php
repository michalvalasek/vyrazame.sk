<?php

class Pages_Controller extends Base_Controller {

	public $layout = 'layouts.default';

	public function action_about()
	{
		$this->layout->content = View::make('pages.about');
	}

}