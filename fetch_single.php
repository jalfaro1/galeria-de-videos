<?php
include('db.php');
include('function.php');
if(isset($_POST["user_id"]))
{
	$output = array();
	$statement = $connection->prepare(
		"SELECT * FROM dataporn 
		WHERE id = '".$_POST["user_id"]."' 
		LIMIT 1"
	);
	$statement->execute();
	$result = $statement->fetchAll();
	foreach($result as $row)
	{
		$output["title"] = $row["title"];
		$output["category"] = $row["category"];
$output["content"] = $row["content"];
		if($row["image"] != '')
		{
			$output['thumbnail'] = '<img src="'.$row["thumbnail"].'" class="img-thumbnail" width="50" height="35" /><input type="hidden" name="hidden_thumbnail" value="'.$row["thumbnail"].'" />';
		}
		else
		{
			$output['thumbnail'] = '<input type="hidden" name="hidden_thumbnail" value="" />';
		}
	}
	echo json_encode($output);
}
?>