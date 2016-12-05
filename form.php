<?php include_once('header.php');?>
<div class="container" id="container">
	
</div>
<div id="content">
	
</div>
<div class="container">
	<div class="row">
		 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
			<form action="member_added.php" method="post">
			<div id="header">
				<h3>Member</h3>
			</div>
			<div id="btn_add">
			<a href="index.php">View Members</a>
				
			</div>
			<label for="name">First Name</label>
			<input type="text" id="first_name" maxlength="80" name="first_name">
			<label for="lname">Last Name</label>
			<input type="text id="last_name" name="last_name" maxlength="80">

			<label for="age">Age</label>
			<input type="number" id="age" name="age" min="1" max="100">

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
</div>
		