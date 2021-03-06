<?php

class Controller_Nova2_Everything extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 2 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova2/everything/index';
		$this->template->title.= 'Main';
	}
	
	public function action_changelog()
	{
		$this->_view = 'components/nova2/everything/changelog';
		
		$nova23 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova23.md');
		$nova22 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova22.md');
		$nova21 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova21.md');
		$nova20 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova20.md');
		$nova12 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova12.md');
		$nova11 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova11.md');
		$nova10 = file_get_contents(APPPATH.'views/components/nova2/everything/changelog_nova10.md');
		
		$this->_data->nova23 = Markdown::parse($nova23);
		$this->_data->nova22 = Markdown::parse($nova22);
		$this->_data->nova21 = Markdown::parse($nova21);
		$this->_data->nova20 = Markdown::parse($nova20);
		$this->_data->nova12 = Markdown::parse($nova12);
		$this->_data->nova11 = Markdown::parse($nova11);
		$this->_data->nova10 = Markdown::parse($nova10);
		
		$this->template->title.= 'Nova 2 Changelog';
	}
	
	public function action_changes($id = '')
	{
		switch ($id)
		{
			default:
			case 'sms':
				$view = 'components/nova2/everything/changes_sms';
				$title = 'Changes Since SMS';
			break;
			
			case 'nova':
				$view = 'components/nova2/everything/changes_nova';
				$title = 'Changes Since Nova 1.2';
			break;
		}
		
		$this->_view = $view;
		$this->template->title.= $title;
	}
	
	public function action_components()
	{
		$this->_view = 'components/nova2/everything/components';
		$this->template->title.= 'Nova Components';
	}
	
	public function action_configure($id = '')
	{
		switch ($id)
		{
			default:
			case 'nova':
				$view = 'components/nova2/everything/configure_nova';
				$title = 'Configuring Nova';
			break;
			
			case 'codeigniter':
				$view = 'components/nova2/everything/configure_ci';
				$title = 'Configuring CodeIgniter';
			break;
		}
		
		$this->_view = $view;
		$this->template->title.= $title;
	}
	
	public function action_genres()
	{
		$this->_view = 'components/nova2/everything/genres';
		$this->template->title.= 'Genres in Nova';
	}
	
	public function action_godaddy()
	{
		$this->_view = 'components/nova2/everything/godaddy';
		$this->template->title.= 'GoDaddy &amp; Nova 2';
	}
	
	public function action_license()
	{
		$this->_view = 'components/nova2/everything/license';
		$this->template->title.= 'The Nova License';
	}
	
	public function action_structure()
	{
		$this->_view = 'components/nova2/everything/structure';
		$this->template->title.= 'Nova 2 File Structure';
	}
	
	public function action_urls()
	{
		$this->_view = 'components/nova2/everything/urls';
		$this->template->title.= 'Nova URLs';
	}
	
	public function action_versioning()
	{
		$this->_view = 'components/nova2/everything/versioning';
		$this->template->title.= 'Versioning in Nova';
	}
}
