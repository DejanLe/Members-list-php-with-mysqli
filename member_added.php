<?php include_once('header.php');?>
<div class="container">
	<div class="row">
		 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<?php
			require_once('config.php');


				if(isset($_POST['submit'])) {

					$null_fields = array();

					if (empty($_POST['first_name'])) {

						$null_fields[] ='First Name';

					}else{
						$first_name = trim($_POST['first_name']);
					}
				 

				if(empty($_POST['last_name'])) {
						$null_fields[] ='Last Name';
					}else{
						$last_name = trim($_POST['last_name']);
					}
				if(empty($_POST['age'])) {
						$null_fields[] ='Age';
					}else{
						$age = trim($_POST['age']);
					}
				if(empty($_POST['gender'])) {
						$null_fields[] ='Gender';
					}else{
						$gender = trim($_POST['gender']);
					}
				if(empty($_POST['relationship'])) {
						$null_fields[] ='Relationship';
					}else{
						$relationship = trim($_POST['relationship']);
					}
				if(empty($null_fields)) {
					$null_variable = NULL;
					$sql = "INSERT INTO FamilyMember VALUES ('$null_variable', '$first_name','$last_name', '$age', '$gender', '$relationship')";
					if(!mysqli_query($conn, $sql)) {
						die('Error:' . mysqli_error($conn));
								}
						echo "Family members has been entered!";

						mysqli_close($conn);
				 
						}
					else
					{
						echo "You neww to enter follwing missing data: <br>";
						foreach ($null_fields as $null_field) {
							echo $null_field . "<br>";
						}
					}
				  
				}	

					?>


		</div>
		<form action="member_added.php" method="post">
			<div id="header">
				<h3>Add Member</h3>
			</div>

			<div id="btn_add">
				<a class="btn btn-success" href="index.php">View Member</a>
			</div>
			<label for="fname">First Name</label>
			<input type="text" id="first_name" name="first_name" maxlength="80">

			<label for="lname">Last Name</label>
			<input type="text" id="last_name"  name="last_name" maxlength="80">

			<label for="age">Age</label>
			<input type="number" name="age" id="age" min="1" maxlength="100">

			<label for="gender">Gender</label>
			<select id="gender" name="gender">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>

			<label for="relationship">Relationship</label>
			<input type="text" id="relationship" name="relationship" maxlength="80">

			<input type="submit" name="submit" value="ADD">
		</form>
	</div>
</div>