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
								<div class="caption"><i class="icon-reorder"></i>GENERATE STATEMENT OF ACCOUNT</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
								<form id="frmobj" class="form-horizontal">
									<input type="hidden" name="regtag" id="regtag" value="0">
									<h3 class="block" style="color:red;">Customer Abridged Information</h3>
									<hr>	
									<div class="control-group">
										<label class="control-label">Account Number</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="accountno" id="accountno"   maxlength="10" />
										</div>
									</div>										
									<div class="control-group">
										<label class="control-label">Account Name</label>
										<div class="controls">
											<input type="text" class="span6 m-wrap" name="accountname" id="accountname"  readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Account Type</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="accounttype" id="accounttype" readonly="true" />
										</div>
									</div>										
									<div class="control-group">
										<label class="control-label">Account Status</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="accountstatus" id="accountstatus" readonly="true" />
										</div>
									</div>			
									<div class="control-group">
										<label class="control-label">BVN</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="bvn" id="bvn" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">NIN</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="nin" id="nin" readonly="true" />
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Phone Number</label>
										<div class="controls">
											<input type="text" class="span3 m-wrap" name="phoneno" id="phoneno" readonly="true" />
										</div>
									</div>	
									<div class="control-group">
										<label class="control-label">Email Address</label>
										<div class="controls">
											<input type="email" class="span6 m-wrap" name="emailaddress" id="emailaddress" readonly="true" />
										</div>
									</div>										
									<div class="form-actions">
										<button type="button" class="btn blue" id="btnsave">Generate</button>
										<button type="button" class="btn" id="btnreset">Reset</button>     
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
	<script src="assets/scripts/accountstatement.js" type="text/javascript"></script>   
</body>
<!-- END BODY -->
</html>