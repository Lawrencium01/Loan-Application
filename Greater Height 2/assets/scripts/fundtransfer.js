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
		$("#accountno1").val('');
		$("#accountno2").val('');
		startup();
	}
	
	function startup(){
		$("#accountname1").val('');
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
	   
	   $("#accountno1").keyup(function(){
		   var accountno = $("#accountno1").val().trim();
		   var frmValues = "accountno=" + accountno +"&TC="+'LA';
		   $.post("managetransactions.php",frmValues).done(function(data){
			   if (data!=0){
				   var row = $.parseJSON(data);
				   $("#accounttype").val(row.accounttype);
				   var fullname = row.surname.trim() + " " + row.firstname.trim() + " " + row.middlename;
				   $("#accountname1").val(fullname);
				   $("#phoneno").val(row.phoneno);
				   $("#bvn").val(row.bvn);
				   $("#nin").val(row.nin);
				   $("#accountstatus").val(row.accountstatus);
			   }else{
				   startup();
			   } 
		   }); 
	   });

	   $("#accountno2").keyup(function(){
		   var accountno = $("#accountno2").val().trim();
		   var frmValues = "accountno=" + accountno +"&TC="+'LA';
		   $.post("managetransactions.php",frmValues).done(function(data){
			   if (data!=0){
				   var row = $.parseJSON(data);
				   $("#accounttype").val(row.accounttype);
				   var fullname = row.surname.trim() + " " + row.firstname.trim() + " " + row.middlename;
				   $("#accountname2").val(fullname);
			   }else{
				   $("#accountname2").val('');
			   } 
		   }); 
	   });
	   
	   $("#btnsave").click(function(){
		   var accountno1 		=	$("#accountno1").val().trim();
		   var accountno2 		=	$("#accountno2").val().trim();
		   var accountname1		= 	$("#accountname1").val().trim();
		   var accountname2		= 	$("#accountname2").val().trim();
		   var amount 			= 	$("#amount").val().trim();
		   var particulars 		= 	$("#particulars").val().trim();
		   var transactiondate	= 	$("#transactiondate").val().trim()
		   if (accountno1==''||accountname1==''||accountno2==''|| accountname2==''||amount==''||particulars==''||transactiondate==''){
			   var msg = "One or more inputs are empty or not correct";
			   alert(msg);				
		   }else{
			   if (accountno1==accountno2){
				   var msg = "Invalid Transaction. You cannot tranfer fund from specified account to itself";
				   alert(msg);				   
			   }else{
				   if (confirm("Are you sure you want to Proceed with this transaction?")==true){
					   var frmValues = $("#frmobj").serialize()+ "&TC="+'FT';
					   $.post("managetransactions.php",frmValues).done(function(data){
						   if (data==1){
							   alert("Fund Transfer Successfull!");
							   $("#accountno1").val('');
							   $("#accountno2").val('');
							   $("#accountname2").val('');
							   startup();
						   }else if(data==-1){
							   var msg = "Fund Tranfer transaction declined due to insuffient fund";
							   alert(msg);
						   }else{
							   alert(data);
						   }
					   });
				   
				   }
			   }
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