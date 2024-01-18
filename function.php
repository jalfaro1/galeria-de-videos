<?php

function upload_image()
{
	if(isset($_FILES["thumbnail"]))
	{
		$extension = explode('.', $_FILES['thumbnail']['name']);
		$new_name = rand() . '.' . $extension[1];
		$destination = './upload/' . $new_name;
		move_uploaded_file($_FILES['thumbnail']['tmp_name'], $destination);
		return $new_name;
	}
}

function get_image_name($user_id)
{
	include('db.php');
	$statement = $connection->prepare("SELECT thumbnail FROM dataporn WHERE id = '$user_id'");
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		return $row["thumbnail"];
	}
}

function get_total_all_records()
{
	include('db.php');
	$statement = $connection->prepare("SELECT * FROM dataporn");
	$statement->execute();
	$result = $statement->fetchAll();
	return $statement->rowCount();
}

?>