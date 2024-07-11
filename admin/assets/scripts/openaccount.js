	onload = startup();
	
	function startup(){
		$("#accountno").val('');
		$("#surname").val('');
		$("#firstname").val('');
		$("#middlename").val('');
		$("#regtag").val('0');
		loadcustomers();
	}
	$(document).ready(function() {       
	   App.init();
	   TableAdvanced.init();
	   $("#btnreset").click(function(){
		   startup();
	   });
	   
	   $("#btnsave").click(function(){
		   var frmValues = $("#frmobj").serialize()+ "&TC=OA";
		   $.post("managetransactions.php",frmValues).done(function(data){
			   var returnData = data.split("~");
			   if (returnData.length==2){
				   $("#regtag").val('1');
				   if (returnData[0]==1){
					   var accountno = returnData[1];
					   $("#accountno").val(accountno);
					   alert("Customer's Account is Successfully Created");
					   loadcustomers();
				   }else if(returnData[0]==2){
					   alert(returnData[1]);
				   }			   
			   }else{
				   alert(data);
			   }

		   });
	   });
	});

	
	function loadcustomers(){
		$("#tb").empty();
		frmValues =  "TC=LC";
		$.post("managetransactions.php",frmValues).done(function(data){
			if (data!=0){
				$("#tb").append(data);
			}
		});
			
	}