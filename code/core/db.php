<?php


class Database
{
	private $db;
	function __construct()
	{
		$this->db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=1234");
		if(!$this->db){ die("Databse conect error !"); };
	}
	
	function select($table,  $where = Array(), $order = "" , $ASC = false)
	{
		$sql = "select * from \"$table\"";
		$condit = Array();
		if(count($where) > 0 || $where != NULL){ $sql .= ' where '; };
		foreach($where as $key => $value)
		{
			$condit[] = '"'.$key.'" = \'' . $value.'\'';
		};
		$sql .= implode(' and ',$condit);
		if($order != ""){ $sql .= ' order by "'.$order.'" '.($ASC?'ASC':'DESC'); };
		$result = pg_query($this->db, $sql);
		if(!$result){ return false; };
		$data = Array();
		while($data[] = pg_fetch_array($result));
		array_pop ($data);
		return $data;

	}
	
	
	
	
	
	function insert($table, $data)
	{
		$cols   = Array();
		$values = Array();
		foreach($data as $key => $value)
		{
			$cols[]   = '"'.$key.  '"';
			$values[] = '\''.$value.'\'';
		};
		
		$sql = "insert into \"$table\" (".implode(',', $cols).') values ('.implode(',', $values).')';
		pg_query($this->db, $sql);
	}
		
	function update($table, $data, $where)
	{
		$update = Array();
		$condit = Array();
		foreach($data as $key => $value){	$update[] = "\"$key\" = '$value'"; };
		foreach($where as $key => $value){    $condit[] = "\"$key\" = '$value'"; };
		$sql = "update \"$table\" set ".implode(', ', $update)." where ".implode(' and ', $condit);
		pg_query($this->db, $sql);
	}
	

	function del($table,  $where = Array())
	{
		$condit = Array();
		foreach($where as $key => $value)
		{
			$condit[] = '"'.$key.'" = \'' . $value.'\'';
		};
		$sql = "delete from \"$table\" where ".implode(' and ',$condit);
		pg_query($this->db, $sql);
		

	}
	
	function query($sql)
	{
		$result = pg_query($this->db, $sql);
		return $result;
	}
}


?>