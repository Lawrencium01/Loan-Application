<?php
	error_reporting(0);
	
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
								<div class="caption"><i class="icon-reorder"></i>SAVINGS RECORD</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form id="frmobj" class="form-horizontal">
									<input type="hidden" name="regtag" id="regtag" value="0">
									<h3 class="block" style="color:red;">Basic Customer Information</h3>
									<hr>
									<div class="control-group">
										<label class="control-label">Account Number</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="account_no" id="account_no" maxlength="10"  />
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
											<textarea class="span6 m-wrap" rows="3" name="residential_address" id="residential_address" readonly="true"></textarea>
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
											<textarea class="span6 m-wrap" rows="3" name="valid_id_detail" id="valid_id_detail" readonly="true"></textarea>
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
										<label class="control-label">Bank Name</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="bank_name" id="bank_name" readonly="true" />
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
											<input type="text" class="span3 m-wrap" name="kin_phone" id="kin_phone" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Relationship with Next of Kin</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="kin_relationship" id="kin_relationship" readonly="true" />
										</div>
									</div>
									<hr>
									<h3 class="block" style="color:red;">Savings Details</h3>
									<hr>
									<div class="control-group">
										<label class="control-label">Savings Amount</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="savings_amount" id="savings_amount" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Frequency</label>
										<div class="controls">
											<textarea class="span6 m-wrap" rows="3" name="frequency" id="frequency" readonly="true"></textarea>
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
											<th style="width:15%;">Account Number</th>
											<th style="width:20%;">Full Name</th>
											<th style="width:15%;">Email</th>
											<th style="width:10%;">Phone Number</th>
											<th style="width:10%;">Saving Amount</th>
											<th style="width:10%;">Frequency</th>
											<th style="text-align:center; width:10%;">ACTION</th>
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
									</tbody>
								</table>
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
	}); 
	
	function startup(){
		$("#name").val('');
		$("#email").val('');
		$("#phone").val('');
		$("#residential_address").val('');
	    $("#office_address").val('');
	    $("#dob").val('');
	    $("#valid_id_detail").val('');
	    $("#marital_status").val('');
		$("#nature_of_business").val('');
	    $("#bvn").val('');
		$("#bank_name").val('');
		$("#accountname").val('');
		$("#kin_name").val('');
		$("#kin_address").val('');
		$("#kin_phone").val('');
		$("#kin_relationship").val('');
		$("#savings_amount").val('');
		$("#frequency").val('');
	}
	
	$("#account_no").keyup(function(){
		var account_no = $("#account_no").val().trim();
		var frmValues = "account_no=" + account_no +"&PT="+'SV';
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
			   var row = $.parseJSON(data);
			   $("#name").val(row.name);
			   $("#email").val(row.email);
			   $("#phone").val(row.phone);
			   $("#residential_address").val(row.residential_address);
			   $("#office_address").val(row.office_address);
			   $("#dob").val(row.dob);
			   $("#valid_id_detail").val(row.valid_id_detail);
			   $("#marital_status").val(row.marital_status);
			   $("#nature_of_business").val(row.nature_of_business);
			   $("#bvn").val(row.bvn);
			   $("#bank_name").val(row.bank_name);
			   $("#accountname").val(row.accountname);
			   $("#kin_name").val(row.kin_name);
			   $("#kin_address").val(row.kin_address);
			   $("#kin_phone").val(row.kin_phone);
			   $("#kin_relationship").val(row.kin_relationship);
			   $("#savings_amount").val(row.savings_amount);
			   $("#frequency").val(row.frequency);
			}else{
			   startup();
			}  
		});   
	});
	
	function loadsavings(){
		$("#tbd").empty();
		frmValues =  "PT=LS";
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
				$("#tbd").append(data);
			}
		});	
	}
	loadsavings();
	
	function fromTable(ref){
		var msg ="Are you sure you want to delete record with Account number = " + ref + " ?";
		if (confirm(msg)==true){
			deleterec(ref);
		}
	}
	
	var account_no = $("#account_no").val().trim();
	function deleterec(ref){
		frmValues =  `PT=QT&ref=${ref}`;
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
</script>
</html>