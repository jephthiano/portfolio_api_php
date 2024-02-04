<?php
// connection function
function dbconnect($userType, $connectionType){
	if($userType === "admin"){// ALL GRANT PRIVILEDGES for admin connection only
		if(strstr(file_location('home_url',''),'000webhostapp')){
			#FOR 000WEBHOST
			$username = 'id17702680_allact';
			$password = 'r*3dD$|Ve!]*mvZK';
			$db = 'id17702680_portfolio';
			$hostname = 'localhost';
		}elseif(strstr(file_location('home_url',''),'free.nf')){
			#FOR 000WEBHOST
			$username = 'if0_35408952';
			$password = 'y3bquFIn2L';
			$db = 'if0_35408952_portfolio_db';
			$hostname = 'sql305.infinityfree.com';
		}else{
			#FOR LOCAL HOST
			$username = 'root';
			$password = 'jephthahJEHOVAHgod332$';
			$db = 'portfolio_db';
			$hostname = 'localhost';
		}
		//CREATE DATABASE
		@$pre_conn = new mysqli($hostname,$username,$password);
		$sql = "CREATE DATABASE IF NOT EXISTS {$db}";
		@$pre_conn->query($sql);
		
		// DEFINING CONNECTION TYPE
		if($connectionType === 'PDO'){ // for pdo
			try{
				return new PDO ("mysql:host={$hostname}; dbname=$db; charset=utf8", $username, $password);
				// set the PDO error mode to excepption
				$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				server_error(500);
			}
		}
	}else{// run this if no connection is specified
		server_error(500);
	}
}
?>