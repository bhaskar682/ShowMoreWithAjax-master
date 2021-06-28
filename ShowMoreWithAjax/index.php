<?php
include('dbconnection.php');
$query = mysqli_query($con,"SELECT * FROM `showmoretbl` LIMIT 2");
$id = "";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Show More with PHP Ajax </title>
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body>
	<div class="container">
		<h1 class="text-center">Show More with Php Ajax</h1>
		<br><br>
		<table class="table table-border" id="load_data">
			<?php
				while($row = mysqli_fetch_array($query))
				{
					?>
					<tr>
						<td><?php echo $row['ID'];?></td>
						<td><?php echo $row['Data'];?></td>
					</tr>
					<?php
					$id = $row['ID'];	
				}
			?>
			<tr id="remove_row">
				<td><button name="btn_more" id="btn_more" data-vid="<?php echo $id; ?>" class="btn btn-outline-primary form-control">Show More</button></td>
			</tr>
		</table>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on("click", "#btn_more", function(){
				last_data_id = $(this).data('vid');
				$('#btn_more').html('Loading...');//changing the button text
				
				$.ajax({
					url: "load_data.php",
					method:"POST",
					data:{last_data_id: last_data_id},
					success: function(data){
						if(data != '')
						{
							$('#remove_row').remove();
							$('#load_data').append(data);
						}
						else
						{
							$('#btn_more').html('No Data');
						}
					}
				});
			});
		});
	</script>

</body>
</html>