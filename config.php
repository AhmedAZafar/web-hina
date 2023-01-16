<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "dream_events";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName  );



/*$conn = new mysqli ($DBserver, $dbuser, $dbpassword, $dbname);

 if ($conn->connect_error)
{
 trigger_error('Database connection failed:'. $conn->connect_error);
 }
 
else
echo 'Database connection successful'; 
$sql="CREATE DATABASE Cosmetics_Online_Shop";

if($conn->query($sql)==false)
 {
 trigger_error('wrong sql'. $sql .$conn->error);
 }

 else
 echo 'Database created successful'; 
 $sql="CREATE TABLE products(
 id int not null auto_increment primary key,
 image varchar(255),
 name varchar(255),
 category varchar(255),
 company varchar(255),
 price varchar(255)
 ) ";
 if($conn->query($sql)==false)
 {
 trigger_error('wrong sql'. $sql .$conn->error);
 }

 else
 echo 'Database Table created successful'; 
 $sql="CREATE TABLE category(
 id int not null auto_increment primary key,
 image varchar(255),
 name varchar(255),
 status varchar(255),
 brand varchar(255)
 ) ";
 if($conn->query($sql)==false)
 {
 trigger_error('wrong sql'. $sql .$conn->error);
 }

else
 echo 'Database Table created successful'; 
 $sql="CREATE TABLE users(
 id int not null auto_increment primary key,
 firstname varchar(255),
 lastname varchar(255),
 email varchar(255),
 password varchar(255),
  type varchar(255)
 ) ";
 if($conn->query($sql)==false)
 {
 trigger_error('wrong sql'. $sql .$conn->error);
 }

else
 echo 'Database Table created successful'; 
 $sql="CREATE TABLE orders(
 id int not null auto_increment primary key,
 name varchar(255),
 price varchar(255),
 quantity varchar(255),
 total varchar(255),
 customername varchar(255),
 customercontact varchar(255),
 customeremail varchar(255),
 customeraddress varchar(255)

 ) ";
 if($conn->query($sql)==false)
 {
 trigger_error('wrong sql'. $sql .$conn->error);
 }







 else
 echo 'Database Table created successful'; 
 */




?>