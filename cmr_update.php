<?php require_once "header.php"; ?>
<!---->

<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Update Customer</h3>
					<form action="update_cmr.php" method="POST" style="text-align: center;">
						<div class="key">
							<input  type="number" placeholder="Customer Id" name="id" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="text" placeholder="Customer Name" name="cm_nm" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="text" placeholder="Address" name="add" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="number" placeholder="Pincode" max="99999999" maxlength="6" name="pin" onkeypress="isNumber(event)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pin Code';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="number" placeholder="Phone No." name="p_no" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone Number';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="text" placeholder="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<input  type="password" placeholder="Password" name="pwd" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
			</div>
		</div>

<?php require_once "footer.php"; ?>