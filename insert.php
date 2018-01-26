<?php
					
					$con=mysqli_connect("localhost","root","","yungistaan_database");
					// Check connection
					if (mysqli_connect_errno())
					  {
					  echo "Failed to connect to MySQL: " . mysqli_connect_error();
					  }
				
					
					$sql="INSERT INTO Persons (FirstName, LastName, Email , Feedback)
					VALUES
					('$_POST[firstname]','$_POST[lastname]','$_POST[email]','$_POST[feedback]')";
					

					if (!mysqli_query($con,$sql))
					  {
					  die('Error: ' . mysqli_error($con));
					  }
					echo "1 record added";
					

					mysqli_close($con);
					?>
					


