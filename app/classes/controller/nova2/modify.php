<?php

class Controller_Nova2_Modify extends Controller_Base
{	
	public function before()
	{
		parent::before();
		
		$this->template->title.= 'Nova 2 - ';
	}
	
	public function action_index()
	{
		$this->_view = 'components/nova2/developers/modify/index';
		$this->template->title.= 'Modifying Nova';
	}
	
	/**
	 * Basic Tutorials
	 */
	
	public function action_addimage()
	{
		$this->_view = 'components/nova2/developers/modify/basic_ss_addimage';
		$this->template->title.= 'Seamless Substitution: Adding an Image to a Page';
	}
	
	public function action_changeicons()
	{
		$this->_view = 'components/nova2/developers/modify/basic_ss_icons';
		$this->template->title.= 'Seamless Substitution: Changing Icons';
	}
	
	public function action_language()
	{
		$this->_view = 'components/nova2/developers/modify/basic_language';
		$this->template->title.= 'Changing Language Items in Nova';
	}
	
	/**
	 * Intermediate Tutorials
	 */
	 
	public function action_changeappfolder()
	{
		$this->_view = 'components/nova2/developers/modify/int_change_appfolder';
		$this->template->title.= 'Changing the Name of the Application Folder';
	}
	
	public function action_changeindex()
	{
		$this->_view = 'components/nova2/developers/modify/int_change_index';
		$this->template->title.= 'Changing the Index File';
	}
	
	public function action_newpage()
	{
		$this->_view = 'components/nova2/developers/modify/int_new_page';
		$this->template->title.= 'Creating a New Page';
	}
	
	/**
	 * Advanced Tutorials
	 */
	
	public function action_github()
	{
		$this->_view = 'components/nova2/developers/modify/adv_github';
		$this->template->title.= 'Nova and Github';
	}
}
