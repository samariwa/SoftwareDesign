<?php
class Applicant extends My_Controller
{
	function __construct()
	{
		parent:: __construct();
	}
	function index()
	{
		$data['content_view'] = 'applicant/dashboard';
		$this->template->sample_template($data);
	}
	function about()
	{
		$data['content_view'] = 'applicant/about';
		$this->template->sample_template($data);
	}
	function ContactUs()
	{
		$data['content_view'] = 'applicant/ContactUs';
		$this->template->sample_template($data);
	}
}
