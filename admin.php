<?php
include_once('junk.php');
$que="SELECT * FROM `registration`";
$result = mysqli_query($db, $que);
$que1="SELECT * FROM `feedback`";
$result1 = mysqli_query($db, $que1);
$que2="SELECT * FROM `hospitals`";
$result2 = mysqli_query($db, $que2);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<title>Admin Page</title>
    <style>
		.container .addp-workspace{
			width: 70vw;
			height: 80vh;
			float: right;
		}
		.container .addp-workspace .insert-pform{
			display: none; 
			width: 30vw;
			height: 50vh;
			margin: 10% 30%;
			text-align: center;
		}
		.container .addp-workspace .insert-pform input{
			margin: 20px 0px;
		}
	</style>
</head>
<body>
<div class="main">
	    <ul>
	      <ul class="list">
	        <li class="logo"><a href="home.html"><img src="Inkedambulence (1)_LI.jpg" alt="Logo" style="width:36px;height:36px"></a></li>
	        </div>
	      </ul>
		  <div class="container">
		<div class="headder">
			<h1>Admin Page</h1>
		</div>
		<div class="menu-list">
			<a id="a1" href="234.php" onclick="myFunction(document.getElementById(this.id))">Driver details</a>
			<a id="a2" href="#" onclick="myFunction(document.getElementById(this.id))">Feedback</a>
			<a id="a3" href="#" onclick="myFunction(document.getElementById(this.id))">Hospitals</a>
			<a id="a5" href="#" onclick="myFunction(document.getElementById(this.id))">Add hospital Information</a>
			<a id="a6" href="#" onclick="myFunction(document.getElementById(this.id))">Back</a>
		</div>
			<div id="tb-container" style="display: none; margin-top: 50px;">
				<table align="center" border="1px" style="width: 700px; line-height: 30px;">
					<tr>
						<th colspan="5"><h2>Driver Details</h2></th>
					</tr>
					<tr>
						<th>Id</th>
						<th>Driver name</th>
						<th>Mobile Number</th>
						<th>Ambulance Reg NO</th>
						<th>RC no</th>
					</tr>
					<?php
						while($rows = mysqli_fetch_assoc($result))
						{
					?>
					<tr>
						<td><?php echo $rows['id']; ?></td>
						<td><?php echo $rows['drivername']; ?></td>
						<td><?php echo $rows['mobileno']; ?></td>
						<td><?php echo $rows['Ambregno']; ?></td>
						<td><?php echo $rows['rcno']; ?></td>
					</tr>
					<?php
						}
					?>
				</table>
			
	</script>
			</div>

		</div>
		
</body>
</html>
