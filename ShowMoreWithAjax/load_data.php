<?php
include('dbconnection.php');
$data_id = "";
$output = "";

$query =mysqli_query($con,"SELECT * FROM `showmoretbl` WHERE `ID` > ".$_POST['last_data_id']." LIMIT 2"); 
if(mysqli_num_rows($query) > 0)
{
	while($row = mysqli_fetch_array($query))
	{
		$data_id = $row['ID'];
		$output .='
		<tbody>
			<tr>
				<td>'.$row['ID'].'</td>
				<td>'.$row['Data'].'</td>
			</tr></tbody>
		';
	}
	$output .='
		<tbody>
			<tr id="remove_row">
				<td><button name="btn_more" id="btn_more" data-vid="'.$data_id.'"id="btn_more" class="btn btn-outline-primary form-control">Show More</button></td>
			</tr>
		</tbody>
	'; 
	echo $output;
}
?>