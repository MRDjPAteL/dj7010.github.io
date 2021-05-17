<?php require_once "header.php";
?>

<center>
<div class="login" style="text-align: center;">
	<div class="main-agileits">
				<div class="form-w3agile">
					<h3>ADD / REMOVE / VIEW CUSTOMER</h3>
					<form action="cmr_reg.php" method="post">
							<input type="submit" value="ADD CUSTOMER">			
							<div class="clearfix"></div>
					</form>		
					<form action="cmr_delete.php" method="post">							
							<input type="submit" value="REMOVE CUSTOMER">			
							<div class="clearfix"></div>
					</form>
					<form action="cmr_view.php" method="post">							
							<input type="submit" value="VIEW CUSTOMER">			
							<div class="clearfix"></div>
					</form>
					<form action="cmr_update.php" method="post">							
							<input type="submit" value="UPDATE CUSTOMER">			
							<div class="clearfix"></div>
					</form>
				</div>
			</div>
		</div>
</center>

</body>
</html>		
<?php require_once "footer.php";?>