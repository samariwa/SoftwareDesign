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
		$this->template->applicant_template($data);
	}
	function about()
	{
		$data['content_view'] = 'applicant/about';
		$this->template->applicant_template($data);
	}
	function ContactUs()
	{
		$data['content_view'] = 'applicant/ContactUs';
		$this->template->applicant_template($data);
	}
	function AppJobCat()
	{
		$data['content_view'] = 'applicant/AppJobCat';
		$this->template->applicant_template($data);
	}
	function AppListofOrgs()
	{
		$data['content_view'] = 'applicant/AppListofOrgs';
		$this->template->applicant_template($data);
	}
	function AppSpecJob()
	{
		$data['content_view'] = 'applicant/AppSpecJob';
		$this->template->applicant_template($data);
	}
	function AppSpecJobDesc()
	{
		$data['content_view'] = 'applicant/AppSpecJobDesc';
		$this->template->applicant_template($data);
	}
	function registerTermsAndCond()
	{
		$data['content_view'] = 'applicant/registerTermsAndCond';
		$this->template->applicant_template($data);
	}
	function registerPersonal()
	{
		$data['content_view'] = 'applicant/registerPersonal';
		$this->template->applicant_template($data);
	}
	function registerContact()
	{
		$data['content_view'] = 'applicant/registerContact';
		$this->template->applicant_template($data);
	}
	function registerEducation()
	{
		$data['content_view'] = 'applicant/registerEducation';
		$this->template->applicant_template($data);
	}
	function registerHobbies()
	{
		$data['content_view'] = 'applicant/registerHobbies';
		$this->template->applicant_template($data);
	}
	function registerReferees()
	{
		$data['content_view'] = 'applicant/registerReferees';
		$this->template->applicant_template($data);
	}
	function registerPassword()
	{
		$data['content_view'] = 'applicant/registerPassword';
		$this->template->applicant_template($data);
	}
	function login()
	{
		$data['content_view'] = 'applicant/login';
		$this->template->applicant_template($data);
	}
}
