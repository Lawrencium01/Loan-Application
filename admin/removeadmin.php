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
											<th style="width:10%;">Username</th>
											<th style="width:15%;">Password</th>
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
											<td></td>
											
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
	function removeadmin(){
		$("#tbd").empty();
		frmValues =  "PT=RA";
		$.post("manageloan.php",frmValues).done(function(data){
			if (data!=0){
				$("#tbd").append(data);
			}
		});	
	}
	removeadmin();
	
	function fromTable(user){
		var msg ="Are you sure you want to delete record with this username";
		if (confirm(msg)==true){
			deleterec(user);
		}
	}	
	
	function deleterec(user){
		frmValues =  `PT=RT&user=${user}`;
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