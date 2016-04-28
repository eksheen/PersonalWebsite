<?php
$db = new mysqli('localhost', 'ContactDB', 'password', 'ContactDB');
if ($db->connect_errno > 0) {
  die('Unable to connect to database [' . $db->connect_error . ']');
}
$formName    = $_POST["name"];
$formEmail   = $_POST["email"];
$formInquiry = $_POST["inquiry"];
$createTable = $db->query("CREATE TABLE Contact_form (
      contact_form_id int(10) not null auto_increment,
      name varchar(30) not null,
      email varchar(30) not null,
      inquiry TEXT not null,
      PRIMARY KEY( contact_form_id ))");
$query = "INSERT INTO Contact_form (name, email, inquiry) VALUES ('$formName', '$formEmail', '$formInquiry')";
$db->query($query) or die("Invalid insert " . $db->error);
header("Location: Contact.php");
?>
