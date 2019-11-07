<?php
class Admin extends My_Controller
{
	function __construct()
	{
		parent:: __construct();
	}
	function index()
	{
		$data['content_view'] = 'admin/adminSelect';
		$this->template->admin_template($data);
	}
	function adminJobList()
	{
		$data['content_view'] = 'admin/adminJobList';
		$this->template->admin_template($data);
	}
	function adminAccApp()
	{
		$data['content_view'] = 'admin/adminAccApp';
		$this->template->admin_template($data);
	}
	function adminNewApp()
	{
		$data['content_view'] = 'admin/adminNewApp';
		$this->template->admin_template($data);
	}
	function adminPenInt()
	{
		$data['content_view'] = 'admin/adminPenInt';
		$this->template->admin_template($data);
	}
	function adminRejApp()
	{
		$data['content_view'] = 'admin/adminRejApp';
		$this->template->admin_template($data);
	}
}