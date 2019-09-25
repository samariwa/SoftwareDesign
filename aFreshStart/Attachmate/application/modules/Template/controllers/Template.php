<?php
class Template extends My_Controller
{
	function __construct()
	{
		parent:: __construct();
	}
	function sample_template($data = NULL)
	{
		$this->load->view('Template/applicant_template_v',$data);
	}
}