<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		body{
			background-image: url('https://t4.ftcdn.net/jpg/03/01/90/17/240_F_301901709_rgZfz91CyV5seHMQlPQHriXaEkLxTMKB.jpg');
			background-repeat: no-repeat;
			object-fit: cover;
			background-attachment: fixed;
		    background-size: cover;
				}
		table{
			font-size: 25px;
		}
		a{
			text-decoration: none;
		}
		</style>
</head>
<body>
<center>
          <script>
			alert("THANKS FOR ORDERING..YOUR ORDER IS SUCCESSFULLY CONFIRMED ");
			</script>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "book_details");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		
		$uname = $_REQUEST['uname'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
        $book = $_REQUEST["book"];
        $quantity = $_REQUEST["quantity"];
		$pincode = $_REQUEST["pincode"];

		$sql = "INSERT INTO orders VALUES ('$uname','$address','$email','$book','$quantity','$pincode')";
		    
		if(mysqli_query($conn, $sql)){
			
			echo "<h1>DATA STORED IN THE DATABASE SUCCESSFULLY"."</h1>";
            echo "<center>\n<h2>DETAILS ARE:</h2></center>";
			echo "<br><br>";
		    echo("<table ><tr><td><b>Name</b></td><td>:</td><td>$uname</td>
			<tr><td><b>Address</b></td><td>:</td><td>$address</td>
			<tr><td><b>E-mail</b></td><td>:</td><td>$email</td>
			<tr><td><b>Book Title</b></td><td>:</td><td>$book</td>
			<tr><td><b>Quantity</b></td><td>:</td><td>$quantity</td>
			<tr><td><b>Pincode</b></td><td>:</td><td>$pincode</td></table>");
			echo "<a href=index.php ><i>Back to Home Page</i></a>";
		
		} 
		else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
