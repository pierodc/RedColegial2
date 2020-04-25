<?php

namespace App\Entity;

use Doctrine\DBAL\Driver\Connection;

//use Doctrine\ORM\Mapping as ORM;



class Connection_db{
	private $sql;
	
	/*
	private $connectionParams = array(
		'dbname' => 'redcolegial_RedColegial',
		'user' => 'redcolegial_RedColegial',
		'password' => 'piero1971',
		'host' => 'localhost',
		'driver' => 'pdo_mysql',
	);
	*/
	
	
	
	
	
	function __construct(){
	/*
		$connectionParams = array(
			'dbname' => 'redcolegial_RedColegial',
			'user' => 'redcolegial_RedColegial',
			'password' => 'piero1971',
			'host' => 'localhost',
			'driver' => 'pdo_mysql',
		);
		$db = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);
*/
		//$Productos = $db->fetchAll('SELECT * FROM Producto');
	
	
	
		}

	function consultaSimple($sql){
		$this->con->query($sql);
		}

	function consultaRetorno_row($sql){
		$datos = $this->con->query($sql);
		$row = $datos->fetch_assoc();
		return $row;
		}
	function consultaRetorno($sql){
		
		$datos = $db->fetchAll($sql);
		//echo $sql;
		//$datos = $this->con->query($sql);
		return $datos;
		}		

	}
	
