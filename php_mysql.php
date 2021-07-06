<?php 

$connection = new mysqli("localhost","root","");

$connection->query("CREATE DATABASE IF NOT EXISTS Marshemello");

mysqli_select_db($connection,"Marshemello");

$connection->query("CREATE TABLE IF NOT EXISTS users(ID INT(11) NOT NULL AUTO_INCREMENT, PRIMARY KEY(ID), NAME VARCHAR(50) NOT NULL, PHONE_NUMBER VARCHAR(20) NOT NULL UNIQUE, ADDRESS VARCHAR(40) NOT NULL, AGE INT(11) NOT NULL)");
