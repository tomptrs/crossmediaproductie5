<?php

class Databank
{
	private $query;
	
	public function __construct()
	{
		mysql_connect("localhost","root","");
		mysql_select_db("usersdb");
	}
	
	public function query($str)
	{
		$this->query = mysql_query($str);
		
	}
	
	
	public function fetchArray()
	{		
		return mysql_fetch_array($this->query);
	}
}


?>