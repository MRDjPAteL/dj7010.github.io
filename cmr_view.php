<?php require_once "header.php"; ?>
<!---->

<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>VIEW ALL CUSTOMERS</h3>
					<form action="view_cmr.php" method="POST">	
						<div class="key">
							<table style="border: 2px; solid blue"><th><td>Customer Name</td><td>Address</td><td>city</td><td>Phone No.</td><td>Email Id</td></th>
							<?php
								while($i=mysqli_fetch_array($ans,MYSQLI_ASSOC));
									{
										$id= $i['c_id'];
										$name= $i['cm_nm'];
										$add= $i['add'];
										$p_no= $i['p_no'];
										$email= $i['email'];
									
							?>
							<table border="2" align="center">
								<tr>
									<td><?php echo "$id"?></td>
									<td><?php echo "$name"?></td>
									<td><?php echo "$add"?></td>
									<td><?php echo "$p_no"?></td>
									<td><?php echo "$email"?></td>
								</tr>
							</table>
							<?php }?>
						</div>
						</table>
					</form>
				</div>
			</div>
		</div>


<?php require_once "footer.php"; ?>