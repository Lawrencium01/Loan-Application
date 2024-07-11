	onload = startup();

		function restrictAlphabets(e){
			var x=e.which||e.keycode;
			if((x>=48 && x<=57) || x==8 ||
				(x>=35 && x<=40)|| x==46 || x==68)
				return true;
			else
				return false;
		}

	
	function startup(){
		$("#surname").val('');
		$("#firstname").val('');
		$("#middlename").val('');
		$("#sex").val('');
	    $("#dob").val('');
	    $("#phoneno").val('');
	    $("#bvn").val('');
	    $("#nin").val('');
		$("#accounttype").val('');
	    $("#accountstatus").val('');
		$("#amount").val('');
	}
	$(document).ready(function() {       
	   App.init();
	   
	   $("#btnreset").click(function(){
		   startup();
	   });
	   
	   $("#accountno").keyup(function(){
		   var accountno = $("#accountno").val().trim();
		   var frmValues = "accountno=" + accountno +"&TC="+'LA';
		   $.post("managetransactions.php",frmValues).done(function(data){
			   if (data!=0){
				   var row = $.parseJSON(data);
				   $("#accounttype").val(row.accounttype);
				   $("#surname").val(row.surname);
				   $("#firstname").val(row.firstname);
				   $("#middlename").val(row.middlename);
				   $("#sex").val(row.sex);
				   $("#dob").val(row.dob);
				   $("#phoneno").val(row.phoneno);
				   $("#bvn").val(row.bvn);
				   $("#nin").val(row.nin);
				   $("#accountstatus").val(row.accountstatus);
			   }else{
				   startup();
			   }
			   
		   });
		   
	   });
	   
	   $("#btnsave").click(function(){
		   var accountno = $("#accountno").val().trim();
		   var surname = $("#surname").val().trim();
		   var amount = $("#amount").val().trim();
		   var particulars = $("#particulars").val().trim();
		   var transactiondate	= 	$("#transactiondate").val().trim()
		   if (accountno=='' || surname=='' || amount==''||particulars==''||transactiondate==''){
			   var msg = "One or more inputs are empty or not correct";
			   alert(msg);				
		   }else{
			   var frmValues = $("#frmobj").serialize()+ "&TC="+'CD';
			   $.post("managetransactions.php",frmValues).done(function(data){
				   if (data==1){
					   alert("Cash Deposit Successfull!");
					   $("#accountno").val('');
					   startup();
				   }else{
					   alert(data);
				   }
			   });
		   }
	   });
	});
