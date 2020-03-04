<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$template = 'events';
		$data['pageId'] = 'events';
		$this->__getglobal->templater($template, $data);
	}
}
