<?php

	session_start();
	include 'config.php';
	
	//connection to database server
		
		$conn=mysqli_connect($server,$username,$password);
		if($conn) {
			echo 'Successfully Connected To Database Server'.'<br>';
		}	
		else {
			echo 'Connection To Database Server Failed'.'<br>';
		}

 	//create database server

		$create='CREATE DATABASE FreshBasket';
		if(mysqli_query($conn,$create)) {
			echo 'Successfully Created Database "FreshBasket"'.'<br>';
		}
		else {
			echo 'Error in Creation Of Database "FreshBasket"'.'<br>';
		}

		mysqli_close($conn);
?>