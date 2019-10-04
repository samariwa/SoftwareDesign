<?php
class SuperUser extends My_Controller
{
	function __construct()
	{
		parent:: __construct();
	}
	function index()
	{
		$data['content_view'] = 'superUser/sUserSelect';
		$this->template->superUser_template($data);
	}
	function sUserListofsUsers()
	{
		$data['content_view'] = 'superUser/sUserListofsUsers';
		$this->template->superUser_template($data);
	}
	function sUserListofUniversities()
	{
		$data['content_view'] = 'superUser/sUserListofUniversities';
		$this->template->superUser_template($data);
	}
}