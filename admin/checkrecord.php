<?php
	error_reporting(0);
	$con = mysqli_connect("localhost","root","","db_lms") or die("Database Connection Error");
	extract($_GET);
	
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
								<div class="caption"><i class="icon-reorder"></i>CHECK RECORD</div>
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
											<input type="text" class="span3 m-wrap" name="ref_no" id="ref_no" maxlength="10"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Fullname</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="name" id="name" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email Address</label>
										<div class="controls">
											<input type="email" class="span6 m-wrap" name="email" id="email" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Phone Number</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="phone" id="phone" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Contact Address</label>
										<div class="controls">
											<textarea class="span6 m-wrap" rows="3" name="r_address" id="r_address" readonly="true"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Office Address</label>
										<div class="controls">
											<textarea class="span6 m-wrap" rows="3" name="office_address" id="office_address" readonly="true"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Date of Birth</label>
										<div class="controls">
											<input type="date" class="span3 m-wrap" name="dob" id="dob"  readonly="true"/>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Valid Id Detail</label>
										<div class="controls">
											<img alt="image" src="" name="fileToUpload" id="fileToUpload" ></img>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Marital Status</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="marital_status" id="marital_status" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Nature of Business</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="nature_of_business" id="nature_of_business" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">BVN</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="bvn" id="bvn" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Spouse Name</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="spouse_name" id="spouse_name" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Bank Name</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="bankname" id="bankname" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Account Number</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="accountno" id="accountno" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Account Name</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="accountname" id="accountname" readonly="true" />
										</div>
									</div>
									<hr>
									<h3 class="block" style="color:red;">Next of Kin Details</h3>
									<hr>
									<div class="control-group">
										<label class="control-label">Fullname</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="kin_name" id="kin_name" readonly="true"  />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Contact Address</label>
										<div class="controls">
											<textarea class="span6 m-wrap" rows="3" name="kin_address" id="kin_address" readonly="true"></textarea>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Phone Number</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="kin_phone_no" id="kin_phone_no" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Relationship with Next of Kin</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="kin_relationship" id="kin_relationship" readonly="true" />
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
									<div class="control-group">
										<label class="control-label">Interest</label>
										<div class="controls">
											<input class="span6 m-wrap" rows="3" name="interest" id="interest" readonly="true"></input>
										</div>
									</div>	
									<div class="form-actions">
										<button type="button" class="btn red" id="btnreset">Reset</button>
										
									</div>
								</form>
								<!-- END FORM-->  
							</div>
						</div>
						<!-- END SAMPLE FORM PORTLET-->
					</div>
				</div>

				
				
				<div class="row-fluid">
					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->
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
											<th style="width:10%;">Reference Number</th>
											<th style="width:15%;">Full Name</th>
											<th style="width:15%;">Email</th>
											<th style="width:10%;">Phone Number</th>
											<th style="width:15%;">Bank Name</th>
											<th style="width:15%;">Account Number</th>
											<th style="width:15%;">Loan Amount</th>
											<th style="text-align:center; width:15%;" colspan=2>ACTION</th>
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
											<td class="hidden-480">X</td>
										</tr>
										<tr >
											<td>Trident</td>
											<td>Internet
												Explorer 5.0
											</td>
											<td class="hidden-480">Win 95+</td>
											<td class="hidden-480">5</td>
											<td class="hidden-480">C</td>
										</tr>
										<tr >
											<td>Trident</td>
											<td>Internet
												Explorer 5.5
											</td>
											<td class="hidden-480">Win 95+</td>
											<td class="hidden-480">5.5</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Trident</td>
											<td>Internet
												Explorer 6
											</td>
											<td class="hidden-480">Win 98+</td>
											<td class="hidden-480">6</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Trident</td>
											<td>Internet Explorer 7</td>
											<td class="hidden-480">Win XP SP2+</td>
											<td class="hidden-480">7</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Trident</td>
											<td>AOL browser (AOL desktop)</td>
											<td class="hidden-480">Win XP</td>
											<td class="hidden-480">6</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Firefox 1.0</td>
											<td class="hidden-480">Win 98+ / OSX.2+</td>
											<td class="hidden-480">1.7</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Firefox 1.5</td>
											<td class="hidden-480">Win 98+ / OSX.2+</td>
											<td class="hidden-480">1.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Firefox 2.0</td>
											<td class="hidden-480">Win 98+ / OSX.2+</td>
											<td class="hidden-480">1.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Firefox 3.0</td>
											<td class="hidden-480">Win 2k+ / OSX.3+</td>
											<td class="hidden-480">1.9</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Camino 1.0</td>
											<td class="hidden-480">OSX.2+</td>
											<td class="hidden-480">1.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Camino 1.5</td>
											<td class="hidden-480">OSX.3+</td>
											<td class="hidden-480">1.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Netscape 7.2</td>
											<td class="hidden-480">Win 95+ / Mac OS 8.6-9.2</td>
											<td class="hidden-480">1.7</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Netscape Browser 8</td>
											<td class="hidden-480">Win 98SE+</td>
											<td class="hidden-480">1.7</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Netscape Navigator 9</td>
											<td class="hidden-480">Win 98+ / OSX.2+</td>
											<td class="hidden-480">1.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.0</td>
											<td class="hidden-480">Win 95+ / OSX.1+</td>
											<td class="hidden-480">1</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.1</td>
											<td class="hidden-480">Win 95+ / OSX.1+</td>
											<td class="hidden-480">1.1</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.2</td>
											<td class="hidden-480">Win 95+ / OSX.1+</td>
											<td class="hidden-480">1.2</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.3</td>
											<td class="hidden-480">Win 95+ / OSX.1+</td>
											<td class="hidden-480">1.3</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.4</td>
											<td class="hidden-480">Win 95+ / OSX.1+</td>
											<td class="hidden-480">1.4</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.5</td>
											<td class="hidden-480">Win 95+ / OSX.1+</td>
											<td class="hidden-480">1.5</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.6</td>
											<td class="hidden-480">Win 95+ / OSX.1+</td>
											<td class="hidden-480">1.6</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.7</td>
											<td class="hidden-480">Win 98+ / OSX.1+</td>
											<td class="hidden-480">1.7</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Mozilla 1.8</td>
											<td class="hidden-480">Win 98+ / OSX.1+</td>
											<td class="hidden-480">1.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Seamonkey 1.1</td>
											<td class="hidden-480">Win 98+ / OSX.2+</td>
											<td class="hidden-480">1.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Gecko</td>
											<td>Epiphany 2.20</td>
											<td class="hidden-480">Gnome</td>
											<td class="hidden-480">1.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Webkit</td>
											<td>Safari 1.2</td>
											<td class="hidden-480">OSX.3</td>
											<td class="hidden-480">125.5</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Webkit</td>
											<td>Safari 1.3</td>
											<td class="hidden-480">OSX.3</td>
											<td class="hidden-480">312.8</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Webkit</td>
											<td>Safari 2.0</td>
											<td class="hidden-480">OSX.4+</td>
											<td class="hidden-480">419.3</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Webkit</td>
											<td>Safari 3.0</td>
											<td class="hidden-480">OSX.4+</td>
											<td class="hidden-480">522.1</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Webkit</td>
											<td>OmniWeb 5.5</td>
											<td class="hidden-480">OSX.4+</td>
											<td class="hidden-480">420</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Webkit</td>
											<td>iPod Touch / iPhone</td>
											<td class="hidden-480">iPod</td>
											<td class="hidden-480">420.1</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Webkit</td>
											<td>S60</td>
											<td class="hidden-480">S60</td>
											<td class="hidden-480">413</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Opera 7.0</td>
											<td class="hidden-480">Win 95+ / OSX.1+</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Opera 7.5</td>
											<td class="hidden-480">Win 95+ / OSX.2+</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Opera 8.0</td>
											<td class="hidden-480">Win 95+ / OSX.2+</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Opera 8.5</td>
											<td class="hidden-480">Win 95+ / OSX.2+</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Opera 9.0</td>
											<td class="hidden-480">Win 95+ / OSX.3+</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Opera 9.2</td>
											<td class="hidden-480">Win 88+ / OSX.3+</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Opera 9.5</td>
											<td class="hidden-480">Win 88+ / OSX.3+</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Opera for Wii</td>
											<td class="hidden-480">Wii</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Nokia N800</td>
											<td class="hidden-480">N800</td>
											<td class="hidden-480">-</td>
											<td class="hidden-480">A</td>
										</tr>
										<tr >
											<td>Presto</td>
											<td>Nintendo DS browser</td>
											<td class="hidden-480">Nintendo DS</td>
											<td class="hidden-480">8.5</td>
											<td class="hidden-480">C/A<sup>1</sup></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<!-- END EXAMPLE TABLE PORTLET-->
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
</body>
<!-- END BODY -->
<script>
	$(document).ready(function() {      
	   App.init();
	   TableAdvanced.init();
		$("#btnreset").click(function(){
			startup();
		});
		$('#verifyBtn').click(function() {
			var bvn = $('#bvn').val();
			var accountno = $('#accountno').val();
			
			$.ajax({
				url: 'backend.php',
				type: 'POST',
				data: { bvn: bvn, accountno: accountno },
				success: function(response) {
					$('#result').html(response);
				}
			});
		});
	}); 
	
	function startup(){
		$("#name").val('');
		$("#email").val('');
		$("#phone").val('');
		$("#r_address").val('');
	    $("#office_address").val('');
	    $("#dob").val('');
	    $("#valid_id_detail").val('');
	    $("#marital_status").val('');
		$("#nature_of_business").val('');
	    $("#bvn").val('');
		$("#spouse_name").val('');
		$("#bankname").val('');
		$("#accountno").val('');
		$("#kin_name").val('');
		$("#kin_address").val('');
		$("#kin_phone_no").val('');
		$("#kin_relationship").val('');
		$("#loan_amount").val('');
		$("#purpose_of_loan").val('');
		$("#monthly_income").val('');
		$("#monthly_repayment").val('');
		$("#repayment_period").val('');
		$("#source_of_repayment").val('');
		$("#details_of_cheque").val('');
		$("#interest").val('');
	}
	
	$("#ref_no").keyup(function(){
		var ref_no = $("#ref_no").val().trim();
		var frmValues = "ref_no=" + ref_no +"&PT="+'CR';
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
			   var row = $.parseJSON(data);
			   $("#name").val(row.name);
			   $("#email").val(row.email);
			   $("#phone").val(row.phone);
			   $("#r_address").val(row.r_address);
			   $("#office_address").val(row.office_address);
			   $("#dob").val(row.dob);
			   $("#fileToUpload").attr("src", row.fileToUpload);
			   $("#marital_status").val(row.marital_status);
			   $("#nature_of_business").val(row.nature_of_business);
			   $("#bvn").val(row.bvn);
			   $("#spouse_name").val(row.spouse_name);
			   $("#bankname").val(row.bankname);
			   $("#accountno").val(row.accountno);
			   $("#accountname").val(row.accountname);
			   $("#kin_name").val(row.kin_name);
			   $("#kin_address").val(row.kin_address);
			   $("#kin_phone_no").val(row.kin_phone_no);
			   $("#kin_relationship").val(row.kin_relationship);
			   $("#loan_amount").val(row.loan_amount);
			   $("#purpose_of_loan").val(row.purpose_of_loan);
			   $("#monthly_income").val(row.monthly_income);
			   $("#monthly_repayment").val(row.monthly_repayment);
			   $("#repayment_period").val(row.repayment_period);
			   $("#source_of_repayment").val(row.source_of_repayment);
			   $("#details_of_cheque").val(row.details_of_cheque);
			   $("#interest").val(row.interest);
			}else{
			   startup();
			}  
		});   
	});
	
	function loadcustomers(){
		$("#tbd").empty();
		frmValues =  "PT=LC";
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
				$("#tbd").append(data);
			}
		});	
	}
	loadcustomers();
	
	function fromTables(ref){
		var msg ="Are you sure you want to delete record with reference number = " + ref + " ?";
		if (confirm(msg)==true){
			deleterec(ref);
		}
	}
	
	function fromTable(ref){
		var msg ="Are you sure you want to Approve record with reference number = " + ref + " ?";
		if (confirm(msg)==true){
			approverec();
		}
	}	
	
	function deleterec(ref){
		frmValues =  `PT=DT&ref=${ref}`;
		$.post("manageloan.php",frmValues).done(function(feedback){
			if (feedback==1){
				alert('Record is successfully deleted');
			}else if(feedback == 0){
				alert('Record does not exist');
			}else{
				alert(feedback)
			}
		});		
	}
	
	function approverec(){
		var name = $("#name").val().trim();
		var email = $("#email").val().trim();
		var phone = $("#phone").val().trim();
		var ref_no = $("#ref_no").val().trim();
		var bankname = $("#bankname").val().trim();
		var accountno = $("#accountno").val().trim();
		var loan_amount = $("#loan_amount").val().trim();
		if (accountno=='' || name=='' || email=='' || phone=='' || bankname=='' || ref_no=='' || loan_amount==''){
		   var msg = "Check the record to be approved by filling in the Reference Number";
		   alert(msg);				
		}else{
		   var frmValues = $("#frmobj").serialize()+ "&PT="+'AT';
		   $.post("manageloan.php",frmValues).done(function(data){
			   if (data==1){
				   alert("Approved Successfully!");
				   $("#accountno").val('');
				   startup();
				}else{
				   alert(data);
				}	
			});
		}
	}
</script>
</html>