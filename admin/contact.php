<html>
<head>
<?php include("mycss.php"); ?>
</head>
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
											<th style="width:10%;">Name</th>
											<th style="width:15%;">Email Address</th>
											<th style="width:10%;">Phone Number</th>
											<th style="width:35%;">Message</th>
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
										</tr>
									</tbody>
								</table>
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<script src="jquery.js"></script>
<script>
	function contactus(){
		$("#tbd").empty();
		frmValues =  "PT=CU";
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
				$("#tbd").append(data);
			}
		});	
	}
	contactus();
</script>
</html>