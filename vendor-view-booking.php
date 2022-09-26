<!DOCTYPE html>
        <html>
        <head>
        	<title></title>
        	<link rel="stylesheet" href="css/stylesheet.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
        <body>
        
        </body>
        </html>

<?php
include("includes/config.php");
		$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);
		if ($conn->connect_error) {
		trigger_error('Database connection failed: ' . $conn->connect_error, E_USER_ERROR);
		}
        $sql="SELECT * FROM bookings";
		$rs=mysqli_query($conn,$sql);
		if ($rs==false) 
		{
			trigger_error('Wrong sql'.$sql.$conn->error);
		}
		else
		{
			$num=1;
			while ($row=mysqli_fetch_assoc($rs)) 
			{
				$id=$row['id'];
				$eventplanner=$row['eventplanner'];
				$serviceid=$row['serviceid'];
				$servicename=$row['servicename'];
				$category=$row['category'];
				$bookingdate=$row['bookingdate'];
				$company=$row['company'];
				$cost=$row['cost'];
				
				?>
				<tr>
				<td><?php echo $num++; ?></td>
				<td><?php echo $eventplanner; ?></td>
				<td><?php echo $serviceid; ?></td>
				<td><?php echo $servicename; ?></td>
				<td><?php echo $category; ?></td>
				<td><?php echo $bookingdate; ?></td>
				<td><?php echo $company; ?></td>
				<td><?php echo $cost; ?></td>
				
				<td>
					
					<a href="vendor-approve-booking.php?id=<?php echo $id; ?>" class="button-approve">APPROVE</a>
					<a href="vendor-delete-booking.php?id=<?php echo $id; ?>" class="button-delete">CANCEL</a>
				</td>
			</tr>

				<?php
			}
        }
        ?>
