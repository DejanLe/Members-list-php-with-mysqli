<?php include_once('header.php'); ?>
<body>
 
		<div class="container" id="container">
			<div id="header">
				<h2>My Members</h2>
			</div>
		
		<div  id="btn_add">
			<a class="btn btn-success" href="form.php">ADD</a>
		</div>
		<div class="container" id="content">
			<div class="row">
				 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
					<?php  
						require_once('config.php');
						$sql = "SELECT MemberID, FirstName,LastName, Age,Gender,Relationship FROM FamilyMember";

							$response = @mysqli_query($conn, $sql);
							if ($response) {
								echo '<table class="table-responsive">  
										<thead>
										 <tr>
											<th>Member ID <th>
											<th>First Name<th>
											<th>Last Name </th>
											<th>Age</th>
											<th>Gender</th>
											<th>Relationship</th>
										</tr>	
										 </thead>
										';

											while ($row = mysqli_fetch_array($response)) {
										echo '  <tbody>
											 	 
												<tr> 
										
												<td> '  . $row['MemberID'] . '    </td>
												<td> '  . $row['FirstName'] . '   </td>
												<td> '  . $row['LastName'] . '    </td>
												<td> '  . $row['Age'] . '         </td>
												<td> '  . $row['Gender'] . '      </td>
												<td> '  . $row['Relationship'] . '</td>

											 	</tr>
									 	</tbody> ' ;
										}
								echo '</table>';
							}
							else{
								echo "Cound not get a response from database" . mysqli_error($conn);
							}
							mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
 		</div>
	 </div>
</body>
</html>