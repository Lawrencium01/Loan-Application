<?php
	error_reporting(0);
	//session_start();
	/*
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
	}else if($_SESSION['PageKey']!='CD'){
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
						<ul class="breadcrumb">
							<li>
								<i class="icon-home"></i>
								<a href="index.html">Home</a> 
								<i class="icon-angle-right"></i>
							</li>
							<li>
								<a href="#">Data Tables</a>
								<i class="icon-angle-right"></i>
							</li>
							<li><a href="#">Advanced Tables</a></li>
						</ul>
						<!-- END PAGE TITLE & BREADCRUMB-->
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN SAMPLE FORM PORTLET-->   
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>INCOME AND EXPENSES</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form id="frmobj" class="form-horizontal">
									<input type="hidden" name="regtag" id="regtag" value="0">
									<hr>
									<h3 class="block" style="color:red;">Income</h3>
									<hr>
									<div class="control-group">
										<label class="control-label">Principal</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="principal" id="principal" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Repayment</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="repayment" id="repayment" />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Interest</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="in_terest" id="in_terest" readonly="true" />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Processing fee</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="processing_fee" id="processing_fee" readonly="true" />
										</div>
									</div>	
									<div class="control-group">
										<label class="control-label">Loan Extension FEE</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="loan_extension" id="loan_extension" />
										</div>
									</div>	
									<div class="control-group">
										<label class="control-label">Others</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="others" id="others" />
										</div>
									</div>	
									<div class="control-group">
										<label class="control-label">Particulars</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="o_particulars" id="o_particulars" />
										</div>
									</div>
									<h3 class="block" style="color:red;">Total Income</h3>
									<hr>	
									<div class="control-group">
										<label class="control-label">Amount</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="i_amount" id="i_amount"   maxlength="10" />
										</div>
									</div>											
									<div class="control-group">
										<label class="control-label">Particulars</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="i_particulars" id="i_particulars" />
										</div>
									</div>															
									<hr>
									<h3 class="block" style="color:red;">Expenses</h3>
									<hr>
									<div class="control-group">
										<label class="control-label">Insurance</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="insurance" id="insurance" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Bank Charges</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="bank_charges" id="bank_charges" />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Legal Fee</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="legal_fee" id="legal_fee" />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Commission on Sale</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="commission" id="commission"  />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Rent</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="rent" id="rent" />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Salary</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="salary" id="salary"  />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Generator Fuel</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="generator" id="generator"   maxlength="10" />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Furniture and Fitting</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="furniture_fitting" id="furniture_fitting"   maxlength="10" />
										</div>
									</div>		
									<div class="control-group">
										<label class="control-label">Referral Bonus</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="referral_bonus" id="referral_bonus"   maxlength="10" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Gift to clients</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="gift" id="gift"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">PHCN</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="phcn" id="phcn"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Bad debt written off</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="bad_debt" id="bad_debt" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Office Stationeries</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="office_stationeries" id="office_stationeries" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Telephone Expenses</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="telephone" id="telephone" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Internet service</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="internet" id="internet"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Repairs</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="repairs" id="repairs"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Loan Recovery fees</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="loan_rec" id="loan_rec"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Licenses renewal fee</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="license" id="license"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Web Design</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="web_design" id="web_design"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Interest on savings</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="interest_savings" id="interest_savings"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Interest on Investment</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="interest_investment" id="interest_investment"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Utilities</label>
										<div class="controls">
											<input type="text" class="span4 m-wrap" name="utilities" id="utilities" />
										</div>
									</div>
									<hr>
									<h3 class="block" style="color:red;">Total Expenses</h3>
									<hr>	
									<div class="control-group">
										<label class="control-label">Amount</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="e_amount" id="e_amount" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Particulars</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="e_particulars" id="e_particulars" />
										</div>
									</div>
									<hr>
									<h3 class="block" style="color:red;">Profit</h3>
									<hr>
									<div class="control-group">
										<label class="control-label">Transaction Date</label>
										<div class="controls">
											<input type="date" class="span3 m-wrap" name="transactiondate" id="transactiondate" />
										</div>
									</div>	
									<div class="control-group">
										<label class="control-label">Profit</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="profit" id="profit" readonly="true" />
										</div>
									</div>
									<div class="form-actions">
										<button type="button" class="btn blue" id="btnsave">Submit</button>
										<button type="button" class="btn" id="btnreset">Reset</button>  
										<button type="button" class="btn red" id="btnprint">Print</button>     
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>	
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
	<script type="text/javascript"></script>   
</body>
<!-- END BODY -->

</html>