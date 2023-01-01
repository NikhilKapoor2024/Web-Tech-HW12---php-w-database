<?php
include("functions.php");
$dblink = db_connect("contact_data");
$sql = "Select * from `user_input` where 1"; // * means "select everything"
$result = $dblink->query($sql) or
	die("Something went wrong with: $sql<br>".$dblink->error);

while ($data = $result->fetch_array(MYSQLI_ASSOC))
{
	echo '<tr>';
	echo '<td>'.$data['auto_id'].'</td>';
	echo '<td>'.$data['first_name'].'</td>';
	echo '<td>'.$data['last_name'].'</td>';
	echo '<td>'.$data['email'].'</td>';
	
	if ($data['username'] == "")
		echo '<td>N/A</td>';
	else
		echo '<td>'.$data['username'].'</td>';
	
	if ($data['comments'] == "")
		echo '<td>N/A</td>';
	else
		echo '<td>'.$data['comments'].'</td>';
	
	echo '</tr>';
}
?>