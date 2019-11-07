<?php
class Template extends My_Controller
{
	function __construct()
	{
		parent:: __construct();
	}
	function applicant_template($data = NULL)
	{
		$this->load->view('Template/applicant_template_v',$data);
	}
	function admin_template($data = NULL)
	{
		$this->load->view('Template/admin_template_v',$data);
	}
	function superUser_template($data = NULL)
	{
		$this->load->view('Template/superuser_template_v',$data);
	}
}