<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_model extends CI_Model {
	const __TABLE_EVENTS = 'events';

	public function register($data) {
		$tbl_user = self::__TABLE_EVENTS;
		$sql = "INSERT INTO `$tbl_user`
			(
				event_name,
                captain_name,
                captain_number,
                player1_name,
                player1_number,
                player2_name,
                player2_number,
                player3_name,
                player3_number,
                player4_name,
                player4_number,
                player5_name,
                player5_number
			) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )";
		$this->db->query($sql, $data);
		$id = $this->db->insert_id();
		$action = 'insert';
		$result = array(
				'action' => $action,
				'id' => $id
			);
		return $result;
	}

}

