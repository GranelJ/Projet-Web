<?php
			//Creation connexion
			$dbname='d3ii5fodbsca3';
			$host='ec2-54-228-255-234.eu-west-1.compute.amazonaws.com';
			$dbuser='nyjmohehyilnvw';
			$dbpass='963ae619d9edfe5580cf7278f372d5204dc59edd4c0e6209d59e91650be73495';

			try
			{
				$bd = new PDO("pgsql:host=$host;dbname=$dbname", $dbuser, $dbpass);
				$bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch (PDOException $e)
			{
				echo $e->getMessage();
				die('<br> Echec lors de la connexion à la BD');
			}
?>