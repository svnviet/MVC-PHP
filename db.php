<?php
$servername='localhost';
$username='oceansoft';
$password='123';
// $dbName='Dbphp';
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE Dbphp";
if($conn->query($sql)){
  // $sql = "CREATE DATABASE ".$dbName;
  // $conn->query($sql);
  $conn->select_db("Dbphp");
  $sqltb = "CREATE TABLE blog_postss (
    id INT AUTO_INCREMENT primary key NOT NULL,
    title varchar(255) DEFAULT NULL,
    description text,
    image varchar(255),
    status int(11),
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP NOT NULL DEFAULT NOW() ON UPDATE NOW()
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

  if ($conn->query($sqltb));{
  	$vs= "INSERT INTO blog_postss (title, description, image, status,created_at,updated_at) VALUES
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
  	( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE()),
    ( 'Title', 'DESCRIPTION', 'images/Omn.jpg',1, CURDATE(),CURDATE());" ;
  	$conn->query($vs);
}


}
?>
