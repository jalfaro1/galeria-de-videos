<?php
include('db.php');
include('function.php');
if(isset($_POST["operation"]))
{
	if($_POST["operation"] == "Add")
	{
		$thumbnail = '';
		if($_FILES["thumbnail"]["name"] != '')
		{
			$thumbnail = upload_image();
		}
		$statement = $connection->prepare("
			INSERT INTO dataporn (title, category, content, thumbnail) 
			VALUES (:title, :category, :content, :thumbnail)
		");
		$result = $statement->execute(
			array(
				':title'	=>	$_POST["title"],
				':category'	=>	$_POST["category"],
      ':content'	=>	$_POST["content"],
				':thumbnail'		=>	$thumbnail
			)
		);
		if(!empty($result))
		{
			echo 'Data Inserted';
		}
	}
	if($_POST["operation"] == "Edit")
	{
		$thumbnail = '';
		if($_FILES["thumbnail"]["name"] != '')
		{
			$thumbnail = upload_image();
		}
		else
		{
			$thumbnail = $_POST["hidden_user_image"];
		}
		$statement = $connection->prepare(
			"UPDATE dataporn 
			SET title = :title, category = :category, content = :content, thumbnail = :thumbnail  
			WHERE id = :id
			"
		);
		$result = $statement->execute(
			array(
				':title'	=>	$_POST["title"],
				':category'	=>	$_POST["category"],
':content'	=>	$_POST["content"],
				':thumbnail'		=>	$thumbnail,
				':id'			=>	$_POST["user_id"]
			)
		);
		if(!empty($result))
		{
			echo 'Data Updated';
		}
	}
}

?>