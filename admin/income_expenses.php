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
									<div class="control-group">
										<label class="control-label">Month</label>
										<div class="controls">
											<select class="span2 chosen" data-placeholder="Choose a Category" tabindex="1" name="month" id="month">
												<option value="JANUARY">JANUARY</option>
												<option value="FEBRUARY">FEBRUARY</option>
												<option value="MARCH">MARCH</option>
												<option value="APRIL">APRIL</option>
												<option value="MAY">MAY</option>
												<option value="JUNE">JUNE</option>
												<option value="JULY">JULY</option>
												<option value="AUGUST">AUGUST</option>
												<option value="SEPTEMBER">SEPTEMBER</option>
												<option value="OCTOBER">OCTOBER</option>
												<option value="NOVEMBER">NOVEMBER</option>
												<option value="DECEMBER">DECEMBER</option>
											</select>										
										</div>
									</div>
									<div class="form-actions">
										<button type="button" class="btn blue" id="btnsave">Submit</button>
										<button type="button" class="btn" id="btnreset">Reset</button>
										<button type="button" class="btn red" id="btnprint">Print</button>
									</div>
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
</body>
<!-- END BODY -->
<script>
	
	$(document).ready(function() {
		$("#profit, #loan_extension, #others, #principal, #repayment, #in_terest, #processing_feem, #insurance, #bank_charges, #legal_fee, #commission, #rent, #salary, #generator, #furniture_fitting, #referral_bonus, #gift, #phcn, #bad_debt, #office_stationeries, #telephone, #internet, #repairs, #loan_rec, #license, #web_design, #interest_savings, #interest_investment, #utilities").keyup(function() {
			var value1 = parseFloat($("#insurance").val());
			var value2 = parseFloat($("#bank_charges").val());
			var value3 = parseFloat($("#legal_fee").val());
			var value4 = parseFloat($("#commission").val());
			var value5 = parseFloat($("#rent").val());
			var value6 = parseFloat($("#salary").val());
			var value7 = parseFloat($("#generator").val());
			var value8 = parseFloat($("#furniture_fitting").val());
			var value9 = parseFloat($("#referral_bonus").val());
			var value10 = parseFloat($("#gift").val());
			var value11 = parseFloat($("#phcn").val());
			var value12 = parseFloat($("#bad_debt").val());
			var value13 = parseFloat($("#office_stationeries").val());
			var value14 = parseFloat($("#telephone").val());
			var value15 = parseFloat($("#internet").val());
			var value16 = parseFloat($("#repairs").val());
			var value17 = parseFloat($("#loan_rec").val());
			var value18 = parseFloat($("#license").val());
			var value19 = parseFloat($("#web_design").val());
			var value20 = parseFloat($("#interest_savings").val());
			var value21 = parseFloat($("#interest_investment").val());
			var value22 = parseFloat($("#utilities").val());
			var value23 = parseFloat($("#principal").val());
			var value24 = parseFloat($("#repayment").val());
			var value25 = parseFloat($("#in_terest").val());
			var value26 = parseFloat($("#processing_fee").val());
			var value27 = parseFloat($("#loan_extension").val());
			var value28 = parseFloat($("#others").val());
			var value29 = parseFloat($("#profit").val());
			
			var sum = value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8 + value9 + value10 + value11 + value12 + value13 + value14 + value15 + value16 + value17 + value18 + value19 + value20 + value21 + value22;
			$("#e_amount").val(sum);
			
			var dif = value24 - value23;
			var pro = value23 * 0.03;
			$("#processing_fee").val(pro);
			$("#in_terest").val(dif);
			
			var income1 = dif + pro + value27 + value28;
			$("#i_amount").val(income1);
			
			var prof = income1 - sum;
			$("#profit").val(prof);
		});
		$("#btnreset").click(function(){
			startup();
		});
	}); 
	function startup(){
		$("#i_amount").val('');
		$("#i_particulars").val('');
		$("#e_amount").val('');
		$("#e_particulars").val('');
		$("#profit").val('');
		$("#transactiondate").val('');
		$("#principal").val('');
		$("#repayment").val('');
		$("#in_terest").val('');
		$("#processing_fee").val('');
		$("#insurance").val('');
		$("#bank_charges").val('');
		$("#legal_fee").val('');
		$("#commission").val('');
		$("#rent").val('');
		$("#salary").val('');
		$("#generator").val('');
		$("#furniture_fitting").val('');
		$("#referral_bonus").val('');
		$("#gift").val('');
		$("#phcn").val('');
		$("#bad_debt").val('');
		$("#office_stationeries").val('');
		$("#telephone").val('');
		$("#internet").val('');
		$("#repairs").val('');
		$("#loan_rec").val('');
		$("#license").val('');
		$("#web_design").val('');
		$("#interest_savings").val('');
		$("#interest_investment").val('');
		$("#utilities").val('');
	}
	
	
	
	$("#btnsave").click(function(){
	   var i_amount = $("#i_amount").val().trim();
	   var i_particulars = $("#i_particulars").val().trim();
	   var principal = $("#principal").val().trim();
	   var repayment = $("#repayment").val().trim();
	   var in_terest = $("#in_terest").val().trim();
	   var processing_fee = $("#processing_fee").val().trim();
	   var i_particulars = $("#i_particulars").val().trim();
	   var e_amount = $("#e_amount").val().trim();
	   var e_particulars = $("#e_particulars").val().trim();
	   var insurance = $("#insurance").val().trim();
	   var bank_charges = $("#bank_charges").val().trim();
	   var legal_fee = $("#legal_fee").val().trim();
	   var commission = $("#commission").val().trim();
	   var rent = $("#rent").val().trim();
	   var salary = $("#salary").val().trim();
	   var generator = $("#generator").val().trim();
	   var furniture_fitting = $("#furniture_fitting").val().trim();
	   var referral_bonus = $("#referral_bonus").val().trim();
	   var gift = $("#gift").val().trim();
	   var phcn = $("#phcn").val().trim();
	   var bad_debt = $("#bad_debt").val().trim();
	   var office_stationeries = $("#office_stationeries").val().trim();
	   var telephone = $("#telephone").val().trim();
	   var internet = $("#internet").val().trim();
	   var repairs = $("#repairs").val().trim();
	   var loan_rec = $("#loan_rec").val().trim();
	   var license = $("#license").val().trim();
	   var web_design = $("#web_design").val().trim();
	   var interest_savings = $("#interest_savings").val().trim();
	   var interest_investment = $("#interest_investment").val().trim();
	   var utilities = $("#utilities").val().trim();
	   var transactiondate = $("#transactiondate").val().trim();
	   var profit = $("#profit").val().trim();
	   var month = $("#month").val().trim();
	   if (i_amount=='' ||i_particulars=='' || e_amount=='' || e_particulars=='' || profit=='' || transactiondate=='' || profit=='' || principal=='' || repayment=='' || in_terest=='' || processing_fee=='' || insurance=='' || bank_charges=='' || legal_fee=='' || commission=='' || rent=='' || salary=='' || generator=='' || furniture_fitting=='' 
			|| referral_bonus=='' || gift=='' || phcn=='' || bad_debt=='' || office_stationeries=='' || telephone=='' || internet=='' || repairs=='' || loan_rec=='' || license=='' || web_design=='' || interest_savings=='' || interest_investment=='' || utilities==''){
		   var msg = "One or more inputs are empty or not correct";
		   alert(msg);				
	   }else{
		   var frmValues = $("#frmobj").serialize()+ "&PT="+'KP';
		   $.post("manageloan.php",frmValues).done(function(data){
			   if (data==1){
				   alert("Record sent successfully!");
				   startup();
				}
			});
		}
	});
	
	$("#btnprint").click(function(){
		var month 		=	$("#month").val().trim();
		var param ="month="+month+"&i_amount="+i_amount+"&i_particulars="+i_particulars+"&e_amount="+e_amount+"&e_particulars="+e_particulars+"&transactiondate="+transactiondate+"&profit="+profit;
		window.location.href ="print.php?"+param;
	});
</script>
</html>