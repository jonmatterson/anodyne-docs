<?php

class Controller_Base extends Controller_Template
{
	public $template;
	
	protected $_status = 200;
	
	protected $_data;
	
	protected $_view;
	
	public function before()
	{
		parent::before();
		
		$this->_data = new \stdClass;
		
		$this->template = View::forge('template');
		$this->template->title = 'AnodyneDocs :: ';
		$this->template->content = false;
	}
	
	public function after($response)
	{
		parent::after($response);
		
		// set the content view
		$this->template->content = View::forge($this->_view, $this->_data);
		
		// return the response object
		return Response::forge($this->template, $this->_status);
	}
}
