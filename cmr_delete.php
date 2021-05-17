<?php require_once "header.php"; ?>
<!---->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>REMOVE CUSTOMERS</h3>
					<form action="delete_cmr.php" method="POST">	
						<div class="key">
							<input  type="text" placeholder="Customer Id" name="c_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
		
<?php require_once "footer.php"; ?>