<?php
	
	$con = mysqli_connect("localhost","root","","db_lms") or die("Database Connection Error");

	extract($_POST);
	
	
	function businessloan(){
		extract($_POST);
		global $con;
		$sqlstr = "INSERT INTO savingpage(account_no,accountname,name,email,phone,residential_address,office_address,gender,dob,origin,valid_id_detail,nature_of_business,bvn,bank_name,kin_name,kin_address,kin_phone,kin_relationship,savings_amount,frequency) VALUES 
				   ($account_no,'$name','$accountname','$email', $phone,'$residential_address','$office_address','$gender','$dob','$origin',
				   '$valid_id_detail','$nature_of_business',$bvn,'$bank_name','$kin_name','$kin_address','$kin_phone','$kin_relationship','$savings_amount','$frequency')";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		echo 1;
	}
	
	function investment(){
		extract($_POST);
		global $con;
		$sqlstr = "INSERT INTO investment(account_no,name,email,phone,home_address,office_address,gender,dob,origin,marital_status,occupation,bank_name,kin_name,kin_address,kin_phone,kin_relationship,investment_amount,amount_in_words,interest,tenure,investment_type_upfront,investment_type_others,account_name) VALUES 
				   ($account_no,'$name','$email', $phone,'$home_address','$office_address','$gender','$dob','$origin',
				   '$marital_status','$occupation','$bank_name','$kin_name','$kin_address','$kin_phone','$kin_relationship',
				   '$investment_amount','$amount_in_words','$interest','$tenure','$investment_type_upfront','$investment_type_others','$account_name')";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		echo 1;
	}
	
	function contactus(){
		extract($_POST);
		global $con;
		$sqlstr = "INSERT INTO contact(name,email,phone,message) VALUES 
				   ('$name','$email', $phone,'$message')";
		$result = mysqli_query($con,$sqlstr)or die(mysqli_error($con));
		echo 1;
	}
	
	
	
	
	if($PT=='BL')
		businessloan();
	elseif($PT=='IN')
		investment();
	elseif($PT=='CN'){
		contactus();
	}
	
?>