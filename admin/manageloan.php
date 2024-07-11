<?php
	
	session_start();
	
	$con = mysqli_connect("localhost","root","","db_lms") or die("Database Connection Error");

	extract($_POST);
	
	function userauthentication(){
		global $con;
		//extract($_POST);
		global $username;
		global $password;
		$password 		= trim($password);
		$userpassword 	= MD5($password);
		
		$sqlstr = "SELECT * FROM admin WHERE username='$username'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));		
		$totalRows = mysqli_num_rows($result);
		if ($totalRows==1){
			$row = mysqli_fetch_array($result);
			$dbpassword = $row['password'];
			if ($userpassword == $dbpassword){
				$_SESSION['PassTag'] = "UA@Go";
				echo 1;
			}else{
				echo -1;
			}
		}else{
			echo 0;
		}
	}

	function fetchBankName($given_code) {
		// Read JSON file contents
		$json_data = file_get_contents('banks.txt');

		// Decode JSON data
		$data = json_decode($json_data, true);

		// Loop through each data item
		foreach ($data['data'] as $item) {
			// Check if the code matches the given value
			if ($item['code'] === $given_code) {
				return $item['name'];
			}
		}

	}
	
	function loadcustomerdetails(){
		extract($_POST);
		global $con;		
		$sqlstr = "SELECT * FROM loanpage WHERE ref_no ='$ref_no'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$total = mysqli_num_rows($result);
		if($total==1){
			$row = mysqli_fetch_array($result);

			$row['bankname'] = fetchBankName($row['bankname']);
			
			$image_url = $row['fileToUpload'];

			// Add image URL to the row
			$row['image_url'] = $image_url;

			echo json_encode($row);
		}else{
			echo 0;
		}
	}
	
	function loadsavings(){
		extract($_POST);
		global $con;		
		$sqlstr = "SELECT * FROM savingpage WHERE account_no ='$account_no'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$total = mysqli_num_rows($result);
		if($total==1){
			$row = mysqli_fetch_array($result);
			
			$row['bank_name'] = fetchBankName($row['bank_name']);
			
			echo json_encode($row);
		}else{
			echo 0;
		}
	}
	
	function loadinvestment(){
		extract($_POST);
		global $con;		
		$sqlstr = "SELECT * FROM investment WHERE account_no ='$account_no'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$total = mysqli_num_rows($result);
		if($total==1){
			$row = mysqli_fetch_array($result);
			
			$row['bankname'] = fetchBankName($row['bankname']);
			
			echo json_encode($row);
		}else{
			echo 0;
		}
	}
	
	
	function loadcustomers(){
		global $con;
		$sqlstr = "SELECT * FROM loanpage ORDER BY id";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));			
		$totalrec = mysqli_num_rows($result);
		if ($totalrec>0){
			$sn = 0;
			$tbrows = "";
			while($row = mysqli_fetch_assoc($result)){
				$sn++;
				$ref_no 		= 	$row['ref_no'];
				$name		=	$row['name'];
				$email		=	$row['email'];
				$phone		=	$row['phone'];
				$bankname	=	fetchBankName($row['bankname']);
				$accountno	=	$row['accountno'];
				$loan_amount		=	$row['loan_amount'];
				$button1  = "<button type='button' value='".$ref_no."' onclick='fromTables(this.value)'>Delete</button>";
				$button2  = "<button type='button' value='".$ref_no."' onclick='fromTable(this.value)'>Approve</button>";
				$tbrows .="	
				<tr>
					<th style='width:5%;'>$sn</th>
					<th style='width:10%;'>$ref_no</th>
					<th style='width:15%;'>$name</th>
					<th style='width:15%;'>$email</th>
					<th style='width:10%;'>$phone</th>
					<th style='width:15%;'>$bankname</th>
					<th style='width:15%;'>$accountno</th>
					<th style='width:15%;'>$loan_amount</th>
					<th style='width:160px; text-align:center;'>$button1</th>
					<th style='width:160px; text-align:center;'>$button2</th>
				</tr>";				
			}
			echo $tbrows;
		}else{
			echo 0;
		}
	}
	
	function loadsavingss(){
		global $con;
		$sqlstr = "SELECT * FROM savingpage ORDER BY id";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));			
		$totalrec = mysqli_num_rows($result);
		if ($totalrec>0){
			$sn = 0;
			$tbrows = "";
			while($row = mysqli_fetch_assoc($result)){
				$sn++;
				$account_no 		= 	$row['account_no'];
				$name		=	$row['name'];
				$email		=	$row['email'];
				$phone		=	$row['phone'];
				$savings_amount	=	$row['savings_amount'];
				$frequency	=	$row['frequency'];
				$button  = "<button type='button' value='".$account_no."' onclick='fromTable(this.value)'>Delete</button>";
				$tbrows .="	
				<tr>
					<th style='width:5%;'>$sn</th>
					<th style='width:10%;'>$account_no</th>
					<th style='width:15%;'>$name</th>
					<th style='width:15%;'>$email</th>
					<th style='width:10%;'>$phone</th>
					<th style='width:15%;'>$savings_amount</th>
					<th style='width:15%;'>$frequency</th>
					<th style='width:160px; text-align:center;'>$button</th>
				</tr>";				
			}
			echo $tbrows;
		}else{
			echo 0;
		}
	}
	
	function loadinvestments(){
		global $con;
		$sqlstr = "SELECT * FROM investment ORDER BY id";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));			
		$totalrec = mysqli_num_rows($result);
		if ($totalrec>0){
			$sn = 0;
			$tbrows = "";
			while($row = mysqli_fetch_assoc($result)){
				$sn++;
				$account_no 		= 	$row['account_no'];
				$name		=	$row['name'];
				$phone		=	$row['phone'];
				$investment_amount	=	$row['investment_amount'];
				$interest	=	$row['interest'];
				$tenure	=	$row['tenure'];
				$button  = "<button type='button' value='".$account_no."' onclick='fromTable(this.value)'>Delete</button>";
				$tbrows .="	
				<tr>
					<th style='width:5%;'>$sn</th>
					<th style='width:10%;'>$account_no</th>
					<th style='width:15%;'>$name</th>
					<th style='width:10%;'>$phone</th>
					<th style='width:15%;'>$investment_amount</th>
					<th style='width:15%;'>$interest</th>
					<th style='width:15%;'>$tenure</th>
					<th style='width:160px; text-align:center;'>$button</th>
				</tr>";				
			}
			echo $tbrows;
		}else{
			echo 0;
		}
	}
	
	function loadloanpayment(){
		extract($_POST);
		global $con;		
		$sqlstr = "SELECT * FROM loanpage WHERE ref_no ='$ref_no'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$total = mysqli_num_rows($result);
		if($total==1){
			$row = mysqli_fetch_array($result);
			echo json_encode($row);
		}else{
			echo 0;
		}
	}
	
	function payment(){
		extract($_POST);
		global $con;
		$sqlstr = "INSERT INTO payment(ref_no,name,email,transactiondate,amount,particulars) VALUES 
		   ('$ref_no','$name','$email','$transactiondate',$amount,'$particulars')";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		echo 1;
		
	}
	
	function loadpaymentdetails(){
		global $con;
		$sqlstr = "SELECT * FROM payment ORDER BY id";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));			
		$totalrec = mysqli_num_rows($result);
		if ($totalrec>0){
			$sn = 0;
			$tbrows = "";
			while($row = mysqli_fetch_assoc($result)){
				$sn++;
				$ref_no 		= 	$row['ref_no'];
				$name		=	$row['name'];
				$email		=	$row['email'];
				$transactiondate		=	$row['transactiondate'];
				$amount	=	$row['amount'];
				$particulars		=	$row['particulars'];
				$button  = "<button type='button' value='".$ref_no."' onclick='fromTable(this.value)'>Delete</button>";
				$tbrows .="	
				<tr>
					<th style='width:5%;'>$sn</th>
					<th style='width:15%;'>$ref_no</th>
					<th style='width:20%;'>$name</th>
					<th style='width:20%;'>$email</th>
					<th style='width:10%;'>$transactiondate</th>
					<th style='width:10%;'>$amount</th>
					<th style='width:15%;'>$particulars</th>
					<th style='width:160px; text-align:center;'>$button</th>
				</tr>";				
			}
			echo $tbrows;
		}else{
			echo 0;
		}
	}
	
	function loadoutstanding(){
		extract($_POST);
		global $con;		
		$sqlstr = "SELECT * FROM loanpage WHERE ref_no ='$ref_no'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$total = mysqli_num_rows($result);
		if($total==1){
			$row = mysqli_fetch_array($result);
			$row['out'] = loadout($row['email']);
			echo json_encode($row);
		}else{
			echo 0;
		}
	}
	
	function loadout($email){
		global $con;
		$query_loan = "SELECT loan_amount FROM loanpage WHERE email = '$email'";
		$result_loan = mysqli_query($con, $query_loan);
		$row_loan = mysqli_fetch_assoc($result_loan);
		$loan_amount = $row_loan['loan_amount'];

		$query_payment = "SELECT amount FROM payment WHERE email = '$email'";
		$result_payment = mysqli_query($con, $query_payment);
		$row_payment = mysqli_fetch_assoc($result_payment);
		$total_payment = $row_payment['amount'];

		return $loan_amount - $total_payment;
	}
	
	function outstanding(){
		extract($_POST);
		global $con;
		$sqlstr = "INSERT INTO outstanding(ref_no,name,email,transactiondate,outstandingamount) VALUES 
		   ('$ref_no','$name','$email','$transactiondate',$outstandingamount)";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		echo 1;
		
	}
	
	function loadoutstandingdetails(){
		global $con;
		$sqlstr = "SELECT * FROM outstanding ORDER BY id";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));			
		$totalrec = mysqli_num_rows($result);
		if ($totalrec>0){
			$sn = 0;
			$tbrows = "";
			while($row = mysqli_fetch_assoc($result)){
				$sn++;
				$ref_no 		= 	$row['ref_no'];
				$name		=	$row['name'];
				$email		=	$row['email'];
				$transactiondate		=	$row['transactiondate'];
				$outstandingamount	=	$row['outstandingamount'];
				$button  = "<button type='button' value='".$ref_no."' onclick='fromTable(this.value)'>Delete</button>";
				$tbrows .="	
				<tr>
					<th style='width:5%;'>$sn</th>
					<th style='width:15%;'>$ref_no</th>
					<th style='width:20%;'>$name</th>
					<th style='width:20%;'>$email</th>
					<th style='width:10%;'>$transactiondate</th>
					<th style='width:10%;'>$outstandingamount</th>
					<th style='width:160px; text-align:center;'>$button</th>
				</tr>";				
			}
			echo $tbrows;
		}else{
			echo 0;
		}
	}
	
	function contactus(){
		global $con;
		$sqlstr = "SELECT * FROM contact ORDER BY id";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));			
		$totalrec = mysqli_num_rows($result);
		if ($totalrec>0){
			$sn = 0;
			$tbrows = "";
			while($row = mysqli_fetch_assoc($result)){
				$sn++;
				$name		=	$row['name'];
				$email		=	$row['email'];
				$phone		=	$row['phone'];
				$message	=	$row['message'];
				$tbrows .="	
				<tr>
					<th style='width:5%;'>$sn</th>
					<th style='width:10%;'>$name</th>
					<th style='width:15%;'>$email</th>
					<th style='width:10%;'>$phone</th>
					<th style='width:35%;'>$message</th>
				</tr>";				
			}
			echo $tbrows;
		}else{
			echo 0;
		}
	}
	
	function removeadmin(){
		global $con;
		$sqlstr = "SELECT * FROM admin ORDER BY id";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));			
		$totalrec = mysqli_num_rows($result);
		if ($totalrec>0){
			$sn = 0;
			$tbrows = "";
			while($row = mysqli_fetch_assoc($result)){
				$sn++;
				$username		=	$row['username'];
				$password		=	$row['password'];
				$button  = "<button type='button' value='".$username."' onclick='fromTable(this.value)'>Delete</button>";
				$tbrows .="	
				<tr>
					<th style='width:5%;'>$sn</th>
					<th style='width:10%;'>$username</th>
					<th style='width:15%;'>$password</th>
					<th style='width:160px;'>$button</th>
				</tr>";				
			}
			echo $tbrows;
		}else{
			echo 0;
		}
	}
	
	function approve(){
		global $con;
		$sqlstr = "SELECT * FROM approved ORDER BY id";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));			
		$totalrec = mysqli_num_rows($result);
		if ($totalrec>0){
			$sn = 0;
			$tbrows = "";
			while($row = mysqli_fetch_assoc($result)){
				$sn++;
				$ref_no	=	$row['ref_no'];
				$name		=	$row['name'];
				$email		=	$row['email'];
				$phone		=	$row['phone'];
				$bankname	=	$row['bankname'];
				$accountno	=	$row['accountno'];
				$loan_amount	=	$row['loan_amount'];
				$tbrows .="	
				<tr>
					<th style='width:5%;'>$sn</th>
					<th style='width:15%;'>$ref_no</th>
					<th style='width:20%;'>$name</th>
					<th style='width:20%;'>$email</th>
					<th style='width:10%;'>$phone</th>
					<th style='width:15%;'>$bankname</th>
					<th style='width:10%;'>$accountno</th>
					<th style='width:5%;'>$loan_amount</th>
				</tr>";				
			}
			echo $tbrows;
		}else{
			echo 0;
		}
	}
	
	function income_expenses(){
		extract($_POST);
		global $con;
		$sqlstr = "INSERT INTO income_expenses(principal,repayment,in_terest,processing_fee,loan_extension,others,o_particulars,insurance,bank_charges,legal_fee,commission,rent,salary,generator,furniture_fitting,referral_bonus,gift,phcn,bad_debt,office_stationeries,telephone,internet,repairs,loan_rec,license,web_design,interest_savings,interest_investment,utilities,i_amount,i_particulars,e_amount,e_particulars,transactiondate,profit,month) VALUES 
		   ('$principal','$repayment','$in_terest','$processing_fee','$loan_extension','$others','$o_particulars','$insurance','$bank_charges','$legal_fee','$commission','$rent','$salary','$generator','$furniture_fitting','$referral_bonus','$gift','$phcn','$bad_debt','$office_stationeries','$telephone','$internet','$repairs','$loan_rec','$license','$web_design','$interest_savings','$interest_investment','$utilities','$i_amount','$i_particulars','$e_amount','$e_particulars','$transactiondate','$profit','$month')";
		   
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		echo 1;
		
	}
	
	function deletecustomerecord() {
		extract($_POST);
		global $con;
		$sqlstr = "SELECT * FROM loanpage WHERE ref_no='$ref'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$counter = mysqli_num_rows($result);
		if($counter == 1){
			$sqlstr = "DELETE FROM loanpage WHERE ref_no='$ref'";
			mysqli_query($con,$sqlstr)or die(mysqli_error($con));
			echo 1;
		}else{
			echo 0;
		}
	}
	
	function deletecustomerecordss() {
		extract($_POST);
		global $con;
		$sqlstr = "SELECT * FROM admin WHERE username='$user'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$counter = mysqli_num_rows($result);
		if($counter == 1){
			$sqlstr = "DELETE FROM admin WHERE username='$user'";
			mysqli_query($con,$sqlstr)or die(mysqli_error($con));
			echo 1;
		}else{
			echo 0;
		}
	}
	
	function deletesavingsrecord() {
		extract($_POST);
		global $con;
		$sqlstr = "SELECT * FROM savingpage WHERE account_no='$ref'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$counter = mysqli_num_rows($result);
		if($counter == 1){
			$sqlstr = "DELETE FROM savingpage WHERE account_no='$ref'";
			mysqli_query($con,$sqlstr)or die(mysqli_error($con));
			echo 1;
		}else{
			echo 0;
		}
	}
	
	function deleteinvestmentrecord() {
		extract($_POST);
		global $con;
		$sqlstr = "SELECT * FROM investment WHERE account_no='$ref'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$counter = mysqli_num_rows($result);
		if($counter == 1){
			$sqlstr = "DELETE FROM investment WHERE account_no='$ref'";
			mysqli_query($con,$sqlstr)or die(mysqli_error($con));
			echo 1;
		}else{
			echo 0;
		}
	}
	
	function approvecustomerecord() {
		extract($_POST);
		global $con;
		$sqlstr = "INSERT INTO approved (ref_no,name,email,phone,bankname,accountno,loan_amount)VALUES
					('$ref_no','$name','$email','$phone','$bankname','$accountno','$loan_amount')";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		echo 1;
	}
	
	function deletepaymentrecord() {
		extract($_POST);
		global $con;
		$sqlstr = "SELECT * FROM payment WHERE ref_no='$ref'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$counter = mysqli_num_rows($result);
		if($counter == 1){
			$sqlstr = "DELETE FROM payment WHERE ref_no='$ref'";
			mysqli_query($con,$sqlstr)or die(mysqli_error($con));
			echo 1;
		}else{
			echo 0;
		}
	}
	

	function deleteoutstandingrecord() {
		extract($_POST);
		global $con;
		$sqlstr = "SELECT * FROM outstanding WHERE ref_no='$ref'";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		$counter = mysqli_num_rows($result);
		if($counter == 1){
			$sqlstr = "DELETE FROM outstanding WHERE ref_no='$ref'";
			mysqli_query($con,$sqlstr)or die(mysqli_error($con));
			echo 1;
		}else{
			echo 0;
		}
	}
	
	function register(){
		extract($_POST);
		global $con;
		global $password;
		$password 	= MD5($password);
		if ($regtag==0){
			$sqlstr = "INSERT INTO admin(username,password) VALUES 
				('$username','$password')";
			$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
			echo "1~".$username;
		}else{
			echo "2~".'ACCOUNT PREVIOUSLY CREATED';
		}
	}
	
	if($PT=='UL'){
		$_SESSION['PassTag'] = "XXXX";
		userauthentication();
	}elseif($PT=='CR')
		loadcustomerdetails();
	elseif($PT=='LC')
		loadcustomers();
	elseif($PT=='PY')
		loadloanpayment();
	elseif($PT=='PM')
		payment();
	elseif($PT=='LP')
		loadpaymentdetails();
	elseif($PT=='OU')
		loadoutstanding();
	elseif($PT=='OT')
		loadout();
	elseif($PT=='OE')
		outstanding();
	elseif($PT=='LO')
		loadoutstandingdetails();
	elseif($PT=='CU')
		contactus();
	elseif($PT=='KP')
		income_expenses();
	elseif($PT=='DT')
		deletecustomerecord();
	elseif($PT=='DP')
		deletepaymentrecord();
	elseif($PT=='DO')
		deleteoutstandingrecord();
	elseif($PT=='SV')
		loadsavings();
	elseif($PT=='IV')
		loadinvestment();
	elseif($PT=='AT')
		approvecustomerecord();
	elseif($PT=='AP')
		approve();
	elseif($PT=='CA')
		register();
	elseif($PT=='LS')
		loadsavingss();
	elseif($PT=='QT')
		deletesavingsrecord();
	elseif($PT=='LI')
		loadinvestments();
	elseif($PT=='UT')
		deleteinvestmentrecord();
	elseif($PT=='RA')
		removeadmin();
	elseif($PT=='RT')
		deletecustomerecordss();
?>