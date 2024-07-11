	onload = resetaccountno();

	function restrictAlphabets(e){
		var x=e.which||e.keycode;
		if((x>=48 && x<=57) || x==8 ||
			(x>=35 && x<=40)|| x==46 || x==68)
			return true;
		else
			return false;
	}

	function resetaccountno(){
		$("#accountno").val('');
		startup();
	}
	
	function startup(){
		$("#accountname").val('');
	    $("#phoneno").val('');
	    $("#bvn").val('');
	    $("#nin").val('');
		$("#accounttype").val('');
	    $("#accountstatus").val('');
		$("#amount").val('');
		$("#particulars").val('');
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
				   var fullname = row.surname.trim() + " " + row.firstname.trim() + " " + row.middlename;
				   $("#accountname").val(fullname);
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
		   var accountno 		=	$("#accountno").val().trim();
		   var accountname		= 	$("#accountname").val().trim();
		   var accounttype 		=	$("#accounttype").val().trim();
		   var accountstatus 	=	$("#accountstatus").val().trim();
		   if (accountno==''||accountname==''){
			   var msg = "One or more inputs are empty or not correct";
			   alert(msg);				
		   }else{
			   var param ="accountno="+accountno+"&accountname="+accountname+"&accounttype="+accounttype+"&accountstatus="+accountstatus;
				window.location.href ="statementofaccount.php?"+param;
		   }
	   });
	});


	var getaccountbalance = function(accountno){
	   var frmValues = "accountno=" + accountno +"&TC="+'AB';
	   $.post("managetransactions.php",frmValues).done(function(data){
		   if (data!=0){
			   newdata = parseFloat(data);
			   newdata = newdata.toFixed(2);
			   $("#currentbalance").val(newdata);
		   }else{
			   alert(data);
		   }
		   
	   });
	}