<?php
// Database connection
	$con = mysqli_connect("localhost", "root", "", "db_lms") or die("Database Connection Error");

	// Check if form is submitted
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Check if file is uploaded
		if (isset($_FILES["fileToUpload"])) {
			// File upload handling
			$target_dir = "uploads/";
			$fileName = rand(10000, 999999) . basename($_FILES["fileToUpload"]["name"]);
			$target_file = $target_dir . $fileName;

			// Move uploaded file to target directory
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
				// File uploaded successfully
				// Now you can proceed with the database insertion
				// Extract form data
				extract($_POST);
			
				// Extract other form fields as needed

				// Prepare SQL query
				$sql = "INSERT INTO loanpage (bankname,accountno,accountname,ref_no,name,email,phone,r_address,office_address,dob,fileToUpload,marital_status,nature_of_business,bvn,place_of_work,spouse_name,kin_name,kin_address,kin_phone_no,kin_relationship,loan_amount,purpose_of_loan,monthly_income,monthly_repayment,repayment_period,source_of_repayment,details_of_cheque,interest) VALUES  
						('$bankname','$accountno','$accountname','$ref_no','$name','$email', $phone,'$r_address','$office_address','$dob',
					   '$target_file','$marital_status','$nature_of_business',$bvn,'$place_of_work','$spouse_name',
					   '$kin_name','$kin_address','$kin_phone_no','$kin_relationship','$loan_amount','$purpose_of_loan',
					   '$monthly_income','$monthly_repayment','$repayment_period','$source_of_repayment','$details_of_cheque','$interest')";

				// Execute SQL query
				$result = mysqli_query($con, $sql);

				// Check if query executed successfully
				if ($result) {
					echo 1; // Success
				} else {
					echo 0; // Failure
				}
			} else {
				echo 2;
				// Error uploading file
			}
		} else {
			echo 0; // No file uploaded
		}
	}

	// Close database connection
	mysqli_close($con);
?>
