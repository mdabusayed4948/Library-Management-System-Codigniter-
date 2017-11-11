<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
    $this->load->view('login_view');  
		
	}
        
        function home()
	{
		$this->load->view('home_view');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */