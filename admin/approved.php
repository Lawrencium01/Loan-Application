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
											<th style="width:15%;">Reference Number</th>
											<th style="width:20%;">Name</th>
											<th style="width:20%;">Email Address</th>
											<th style="width:10%;">Phone Number</th>
											<th style="width:15%;">Bank Name</th>
											<th style="width:10%;">Account Number</th>
											<th style="width:5%;">Loan Amount</th>
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
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<script src="jquery.js"></script>
<script>
	function approved(){
		$("#tbd").empty();
		frmValues =  "PT=AP";
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
				$("#tbd").append(data);
			}
		});	
	}
	approved();
</script>
</html>