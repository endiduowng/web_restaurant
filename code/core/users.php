<?php

class User
{
	public  $ssid;
	private $db;
	
	function __construct()
	{
		$this->db = new Database();
		session_start();
		$this->ssid = session_id();
	}
	
	function isLogged()
	{
		$result = $this->db->select('User', Array('currentID'=>$this->ssid));
		if(count($result) > 0){ return $result[0]; };
		return false;	
	}

	function login($number, $pass)
	{
		if($this->isLogged()){ $this->logout(); };
		$result = $this->db->select('User', Array('Username'=>$number, 'Password'=>$pass));
		if(count($result) > 0)
		{
			$this->db->update('User', Array('currentID' => $this->ssid), Array('Username' => $number));
			return $result[0];
	    };
		return false;
	}

	function logout()
	{
		$this->db->update('User', Array('currentID'=>""), Array('currentID'=>$this->ssid));
	}

	function reg($number, $pass, $name, $email)
	{
		$result = $this->select('User', Array('Username'=>$number));
		if(count($result) > 0){ return false; };
		$this->db->insert('User', Array('Username'=>$number, 'Password'=>$pass, 'HoTen'=>$name, 'Email'=>$email));

    }
}

$user = new User();

?>