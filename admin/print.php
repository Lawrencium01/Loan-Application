<?php
	$con = mysqli_connect("localhost","root","","db_lms") or die("Database Connection Error");
	extract($_GET);
?>
<html>
	<head>
		<title> Income And Expenses Account </title>
	</head>
	<style>
		.tb{
			width:80%;
			margin-left: auto;
			margin-right: auto;
			
		}
	</style>
	<body>
		<table class="tb" border="1">
			<tr>
				<td colspan=7>
					<center><h3>Greater Height</h3></center>
				</td>
			</tr>	
			<tr>
				<td colspan=7>
					<center><h4>P.M.B. 614 AKURE, ONDO STATE.</h4></center>
				</td>
			</tr>	
			<tr>
				<td colspan=7>
					<center><h4 style="color: blue;">INCOME AND EXPENSES ACCOUNT</h4></center>
				</td>
			</tr>
			<tr>
				<td colspan="7">
					<table>
						<tr>
							<td><b>MONTH:</b></td>
							<td><?php echo $month; ?></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td style="width:5%; text-align:right; padding-right:1%;">S/NO</td>
				<td style="width:11%;">Date</td>
				<td style="width:11%; text-align:right; padding-right:1%;">Income</td>
				<td>Income Particulars</td>
				<td style="width:11%; text-align:right; padding-right:1%;">Expenses</td>
				<td>Expenses Particulars</td>
				<td style="width:11%; text-align:right; padding-right:1%;">Profit</td>
			</tr>
			<?php
				$sqlstr = "SELECT * FROM income_expenses WHERE month ='$month' ORDER BY id ASC";
				$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
				if (mysqli_num_rows($result)>0){
					$sno = 0;
					while($row = mysqli_fetch_assoc($result)){
						$sno++;
						$transactiondate 			= 	$row['transactiondate'];
						$i_amount 			= 	number_format($row['i_amount'],2);
						$i_particulars	= 	$row['i_particulars'];
						$e_amount 		= 	number_format($row['e_amount'],2);
						$e_particulars 	= 	$row['e_particulars'];
						$profit 		= 	number_format($row['profit'],2);
						echo"
						<tr>
							<td style='width:5%; text-align:right; padding-right:1%;'>$sno</td>
							<td style='width:11%;'>$transactiondate</td>
							<td style='width:11%; text-align:right; padding-right:1%;'>$i_amount</td>
							<td>$i_particulars</td>
							<td style='width:11%; text-align:right; padding-right:1%;'>$e_amount</td>
							<td>$e_particulars</td>
							<td style='width:11%; text-align:right; padding-right:1%;'>$profit</td>
						</tr>";
					}					
				}				
			?>
		</table>

	</body>
	
</html>