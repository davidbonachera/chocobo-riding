<?php
class Page_Controller extends Template_Controller {

	// Set the name of the template to use
	//public $template = 'templates/default';

	public function home()
	{
		$this->authorize('logged_out');
        $this->template->title = "Présentation";
        $this->template->content = new View('pages/home');
    }
    
    public function events()
	{
		$this->template->title = "Evénements";
        $this->template->content = View::factory('pages/events')
        	->bind('user', $user)
        	->bind('updates', $updates);

        $user = $this->session->get('user');

        $updates = ORM::factory('update')
        	->orderby('date', 'desc')
        	->find_all();
    }
	
	public function tutorial()
	{
		$this->template->content = new View('pages/tutorial');
	}
		
	public function error()
	{
		$this->authorize('logged_out');
		$this->template->content = new View('pages/home');
	}
	
	public function shoutbox()
	{
		$this->authorize('logged_in');
		$view = new View('pages/shoutbox');
		$this->template = new View('templates/shoutbox');
        $this->template->content = $view;
	}
	
	public function closed()
	{
		$view = new View('pages/closed');
		$this->template = new View('templates/shoutbox');
        $this->template->content = $view;
	}
	
	public function locale($locale)
	{
		$user = $this->session->get('user');
		$languages = array_keys(gen::languages());
		if ($user->id >0)
		{
			$default = $user->locale;
			if (!in_array($locale, $languages)) $locale = $default;
			$user->locale = $locale;
			$user->save();
			
		}
		else
		{
			$default = cookie::get('locale');
			if (!in_array($locale, $languages)) $locale = $default;
			cookie::set('locale', $locale);
		}
		url::redirect(request::referrer());
	}
	
	public function design($design_name)
	{
		$user = $this->session->get('user');
		
		$design = ORM::factory('design')
			->where('name', $design_name)
			->find();
		if ($user->id >0)
		{
			if ($design->id >0) 
			{
				$user->design_id = $design->id;
				$user->save();
			}
		}
		else
			if ($design->id >0)
				cookie::set('design', $design_name);
					
		url::redirect(request::referrer());
	}
	
	public function test()
	{
		$this->template->content = new View('pages/test');
	}

}