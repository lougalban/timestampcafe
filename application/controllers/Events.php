<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$template = 'events';
		$data['pageId'] = 'events';
		$this->__getglobal->templater($template, $data);
	}

	public function event1()
	{
		$template = 'events/ml';
		$data['pageId'] = 'events';
		$this->__getglobal->templater($template, $data);
	}

	public function event2()
	{
		$template = 'events/cf';
		$data['pageId'] = 'events';
		$this->__getglobal->templater($template, $data);
	}

	public function event3()
	{
		$template = 'events/lol';
		$data['pageId'] = 'events';
		$this->__getglobal->templater($template, $data);
	}

	public function register()
	{
		$data = array(
			'event_name' 	 => $this->input->post('event_name'),
			'captain' 		 => $this->input->post('captain'),
			'captain_mobile' => $this->input->post('captain_mobile'),
			'player1'		 => $this->input->post('player1'),
			'player1_mobile' => $this->input->post('player1_mobile'),
			'player2'		 => $this->input->post('player2'),
			'player2_mobile' => $this->input->post('player2_mobile'),
			'player3'		 => $this->input->post('player3'),
			'player3_mobile' => $this->input->post('player3_mobile'),
			'player4'		 => $this->input->post('player4'),
			'player4_mobile' => $this->input->post('player4_mobile'),
			'player5'		 => $this->input->post('player5'),
			'player5_mobile' => $this->input->post('player5_mobile'),
		);

		$result = $this->events_model->register($data);
		
		$msg = ($result)?'success':'warning';
		if($result) {
			$this->session->set_flashdata('register_msg', $msg);
			$path = base_url()."events/".$this->input->post('event_id');
			redirect($path, 'location');
		}
	}
}
