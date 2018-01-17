<?php
	$jsondata = file_get_contents("students.json");
	$json = json_decode($jsondata,true);
	$output = "<ul>";
 	foreach($json['students'] as $student)
	{
		$output .= "<h4>".$student['name']."</h4>";
		$output .= "<li>age: ".$student['age']."</li>";
		$output .= "<li>sex: ".$student['sex']."</li>";
		$output .= "<li>nationality: ".$student['nationality']."</li>";
		$output .= "<li>course: ".$student['course']."</li>";
	}
	$output .= "</ul>";
	echo $output;
 ?>
