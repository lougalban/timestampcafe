<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$template = 'contact';
		$data['pageId'] = 'contact';
		$this->__getglobal->templater($template, $data);
	}

}
