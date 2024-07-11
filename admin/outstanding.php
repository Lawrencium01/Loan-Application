<?php
	error_reporting(0);
	/*
	session_start();
	if(!isset($_SESSION['PassTag'])){
		echo "ACCESS DENIED. Bypassing the Login Page";
		exit;
	}else if($_SESSION['PassTag']!='UA@Go'){
		echo "ACCESS DENIED. Required Parameter not Set";
		exit;		
	}
	if(!isset($_SESSION['PageKey'])){
		echo "ACCESS DENIED. Bypassing the Login Page";
		exit;
	}else if($_SESSION['PageKey']!='CW'){
		echo "ACCESS DENIED. Required Parameter not Set";
		exit;		
	}
	$_SESSION['PageKey']="XXX";
	*/
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<?php include("mycss.php"); ?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->  
	<?= include("header.php"); ?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar nav-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->      
			<?php include("sidebar.php"); ?>
			<!-- END SIDEBAR MENU -->
		</div>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>portlet Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->        
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN STYLE CUSTOMIZER -->
						<div class="color-panel hidden-phone">
							<div class="color-mode-icons icon-color"></div>
							<div class="color-mode-icons icon-color-close"></div>
							<div class="color-mode">
								<p>THEME COLOR</p>
								<ul class="inline">
									<li class="color-black current color-default" data-style="default"></li>
									<li class="color-blue" data-style="blue"></li>
									<li class="color-brown" data-style="brown"></li>
									<li class="color-purple" data-style="purple"></li>
									<li class="color-grey" data-style="grey"></li>
									<li class="color-white color-light" data-style="light"></li>
								</ul>
								<label>
									<span>Layout</span>
									<select class="layout-option m-wrap small">
										<option value="fluid" selected>Fluid</option>
										<option value="boxed">Boxed</option>
									</select>
								</label>
								<label>
									<span>Header</span>
									<select class="header-option m-wrap small">
										<option value="fixed" selected>Fixed</option>
										<option value="default">Default</option>
									</select>
								</label>
								<label>
									<span>Sidebar</span>
									<select class="sidebar-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
								<label>
									<span>Footer</span>
									<select class="footer-option m-wrap small">
										<option value="fixed">Fixed</option>
										<option value="default" selected>Default</option>
									</select>
								</label>
							</div>
						</div>
						<!-- END BEGIN STYLE CUSTOMIZER -->  
						<!-- BEGIN PAGE TITLE & BREADCRUMB-->
						<h3 class="page-title">
							Advanced Tables <small>advanced datatables</small>
						</h3>
	
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>OUTSTANDING LOAN</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form id="frmobj" class="form-horizontal">
									<input type="hidden" name="regtag" id="regtag" value="0">
									<h3 class="block" style="color:red;">Basic Customer Information</h3>
									<hr>	
									<div class="control-group">
										<label class="control-label">Reference Number</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="ref_no" id="ref_no"   maxlength="10" />
										</div>
									</div>										
									<div class="control-group">
										<label class="control-label">Fullname</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="name" id="name"  readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="email" id="email" readonly="true" />
										</div>
									</div>									
									<div class="control-group">
										<label class="control-label">Phone Number</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="phone" id="phone"  readonly="true" />
										</div>
									</div>									
									<hr>
									<h3 class="block" style="color:red;">Loan Details</h3>
									<hr>
									<div class="control-group">
										<label class="control-label">Loan Amount</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="loan_amount" id="loan_amount" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Purpose of Loan</label>
										<div class="controls">
											<textarea class="span6 m-wrap" rows="3" name="purpose_of_loan" id="purpose_of_loan" readonly="true"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Monthly income</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="monthly_income" id="monthly_income" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Monthly repayment</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="monthly_repayment" id="monthly_repayment" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Repayment Period</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="repayment_period" id="repayment_period"  readonly="true"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Source of Repayment</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="source_of_repayment" id="source_of_repayment" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Details of Pre sined Cheque</label>
										<div class="controls">
											<textarea class="span6 m-wrap" rows="3" name="details_of_cheque" id="details_of_cheque" readonly="true"></textarea>
										</div>
									</div>
									<h3 class="block" style="color:red;">Outstanding Section</h3>
									<hr>
									<div class="control-group">
										<label class="control-label">Bank Name/Account Number</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="bankname_accountno" id="bankname_accountno" readonly="true" />
										</div>
									</div>								
									<div class="control-group">
										<label class="control-label">Transaction Date</label>
										<div class="controls">
											<input type="date" class="span3 m-wrap" name="transactiondate" id="transactiondate" />
										</div>
									</div>									
									<div class="control-group">
										<label class="control-label">Outstanding amount</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="outstandingamount" id="outstandingamount" readonly="true" />
										</div>
									</div>							
									<div class="form-actions">
										<button type="button" class="btn blue" id="btnsave">Submit</button>
										<button type="button" class="btn" id="btnreset">Reset</button>     
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>
				<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-globe"></i>Show/Hide Columns</div>
								<div class="actions">
									<div class="btn-group">
									</div>
								</div>
							</div>
							<div class="portlet-body">
								<table class="table table-striped table-bordered table-hover table-full-width" id="sample_2">
									<thead>
										<tr>
											<th style="width:5%;">#</th>
											<th style="width:15%;">Reference Number</th>
											<th style="width:20%;">Full Name</th>
											<th style="width:15%;">Email</th>
											<th style="width:15%;">Transaction Date</th>
											<th style="width:18%;">Outstanding amount</th>
											<th style="width:15%;">ACTION</th>
										</tr>
									</thead>
									<tbody id="tbd">
										<tr>
											<td>Trident</td>
											<td>Internet
												Explorer 4.0
											</td>
											<td class="hidden-480">Win 95+</td>
											<td class="hidden-480">4</td>
											<td class="hidden-480">X</td>
											<td class="hidden-480">X</td>
											<td class="hidden-480">X</td>
										</tr>
									<tbody>
								</table>

	
				
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?= include("footer.php") ?>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <?= include("myjs.php") ?> 
	<script src="assets/scripts/cashwithdrawal.js" type="text/javascript"></script>   
</body>
<!-- END BODY -->
<script>
	$(document).ready(function() {      
		$("#btnreset").click(function(){
			startup();
		});
	}); 
	
	function startup(){
		$("#name").val('');
		$("#email").val('');
		$("#phone").val('');
		$("#loan_amount").val('');
		$("#purpose_of_loan").val('');
		$("#monthly_income").val('');
		$("#monthly_repayment").val('');
		$("#repayment_period").val('');
		$("#source_of_repayment").val('');
		$("#details_of_cheque").val('');
		$("#bankname_accountno").val('');
		$("#transactiondate").val('');
		$("#outstandingamount").val('');
	}
	
	$("#ref_no").keyup(function(){
		var ref_no = $("#ref_no").val().trim();
		var frmValues = "ref_no=" + ref_no +"&PT="+'OU';
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
			   var row = $.parseJSON(data);
			   $("#name").val(row.name);
			   $("#email").val(row.email);
			   $("#phone").val(row.phone);
			   $("#loan_amount").val(row.loan_amount);
			   $("#purpose_of_loan").val(row.purpose_of_loan);
			   $("#monthly_income").val(row.monthly_income);
			   $("#monthly_repayment").val(row.monthly_repayment);
			   $("#repayment_period").val(row.repayment_period);
			   $("#source_of_repayment").val(row.source_of_repayment);
			   $("#details_of_cheque").val(row.details_of_cheque);
			   $("#bankname_accountno").val(row.bankname_accountno);
			   $("#outstandingamount").val(row.out);
			}else{
			   startup();
			}  
		});   
	});
	
	$("#btnsave").click(function(){
	   var transactiondate = $("#transactiondate").val().trim();
	   var outstandingamount = $("#outstandingamount").val().trim();
	   var ref_no = $("#ref_no").val().trim();
	   var email = $("#email").val().trim();
	   var name = $("#phone").val().trim();
	   if (outstandingamount=='' ||transactiondate=='' || ref_no=='' ||email=='' || name==''){
		   var msg = "One or more inputs are empty or not correct";
		   alert(msg);				
	   }else{
		   var frmValues = $("#frmobj").serialize()+ "&PT="+'OE';
		   $.post("manageloan.php",frmValues).done(function(data){
			   if (data==1){
				   alert(" Outstanding information sent successfully!");
				   $("#ref_no").val('');
				   loadoutstanding();
				   startup();
				}
			});
		}
	});
	
	function loadout(){
		$("#outstandingamount").empty();
		frmValues =  "PT=OT";
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
				$("#outstandingamount").append(data);
			}
		});	
	}
	
	function loadoutstanding() {
		$("#tbd").empty();
		frmValues =  "PT=LO";
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
				$("#tbd").append(data);
			}
		});	
	}
	loadoutstanding();
	
	function fromTable(ref){
		var msg ="Are you sure you want to delete record with reference number = " + ref + " ?";
		if (confirm(msg)==true){
			deleterec(ref);
		}
	}
		
		
	function deleterec(ref){
		frmValues =  `PT=DO&ref=${ref}`;
		$.post("manageloan.php",frmValues).done(function(feedback){
			if (feedback==1){
				alert('Record is successfully deleted');
				startup();
			}else if(feedback == 0){
				alert('Record does not exist');
			}else{
				alert(feedback)
			}
		});		
	}
</script>
</html>