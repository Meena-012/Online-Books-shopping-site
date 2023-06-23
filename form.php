<!DOCTYPE html>
<html>
<head>
    <title>Book Order Form</title>
    <style>
		body{
			text-align: center;
			font-size: 20px;
			background-image: url('https://t3.ftcdn.net/jpg/03/01/90/18/240_F_301901899_lalLiJJTviVxRPTpJ8ShYIe6TcpLbFqC.jpg');
			background-repeat: no-repeat;
			object-fit: cover;
			background-attachment: fixed;
			background-size: cover;
		}
        
		
       .button{
            
                background-color: transperent; 
                border: none;
                color: black;
                border-radius:10px;
                padding: 10px 21px;
                border-style: solid;
                border-width: 2px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 4px 2px;
                cursor: pointer;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
           }
           .button2:hover {
  				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
table{
	background-image: url('https://t3.ftcdn.net/jpg/02/50/71/40/240_F_250714070_XbHMGZuHDJIA5OuyaM6QT00YPJpaqSwD.jpg');
    background-repeat: no-repeat;
    object-fit: cover;
    background-attachment: fixed;
    background-size: cover;
}
.gfg {
	border-collapse:separate;
    border-spacing:0 17px;
	border-style: solid ;
    border-width: 4px;
	color:black;
	border-radius: 4%;
	width: 500px;
	overflow: hidden;
    margin: auto;
    margin: 20 0 0 300px;
    padding: 30px;
    background:transparent;
    }
a{
	text-decoration: none;
}     
    </style>
</head>
<body>
    <center><h1 style="padding: 2%;">BOOK NOW</h1></center>

    <form method="post" action="store_order.php">
       <b>
		<table class = "gfg" >
			<center>
	   <tr>
				<td>Your name</td>
				<td>:</td>
				<td><input type="text" name="uname" id="uname" style="border-radius: 5px;" required></td>
				</tr>


				<tr>
				<td>Your E-mail</td>
				<td>:</td>
				<td><input type="email" name="email" id="email"style="border-radius: 5px;" required></td>
				</tr>

				<tr>
				<td>Book Title</td>
				<td>:</td>
				<td><select name="book" id="book"  style="border-radius: 5px;">
							<option>The Girl with no dream</option>
							<option>The Invisible Hour</option>
							<option>Tom Lake A Navel Ann Patchett</option>
							<option>All the Gold Starts</option>
							<option>Harry Potter &the Philosopher Stone</option>
							<option> A Million Thoughts</option>
						</select></td>
				</tr>

				<tr>
				<td>Quantity</td>
				<td>:</td>
				<td><input type="number" name="quantity" id="quantity" style="border-radius: 5px;" required></td>
				</tr>

				<tr>
					<td>Gender</td>
					<td>:</td>
					<td> <input type="radio" id="gender" name="gender" >male
						
						<input type="radio" id="gender" name="gender" >female
						</td>
		        </tr>
					<tr>
				<td>Address</td>
				<td>:</td>
				<td><input type="text" name="address" id="address"  style="border-radius: 5px;"required></td>
				</tr>

				<tr>
				<td>Pincode</td>
				<td>:</td>
				<td><input type="text" name="pincode" id="pincode" style="border-radius: 5px;" required></td>
				</tr>

				<tr>
				<td>Mobile-number</td>
				<td>:</td>
				<td><input type="text" name="number" id="number" style="border-radius: 5px;" required></td>
				</tr>
				</b>
				
                <tr>
					
				<td><button class="button button2">Submit</button></td>
			</tr></center>
		</table>
		<?php
		echo "<br><br>";
		echo "<a href=index.php ><i>Back to Home Page</i></a>";
		?>
        
    </form>
</body>
</html>
	
	