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
		$("#currentbalance").val('');
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
				   getaccountbalance(accountno);
			   }else{
				   startup();
			   }
			   
		   });
		   
	   });
	   
	   $("#btnsave").click(function(){
		   var accountno 		=	$("#accountno").val().trim();
		   var surname 			= 	$("#surname").val().trim();
		   var amount 			= 	$("#amount").val().trim();
		   var particulars 		= 	$("#particulars").val().trim();
		   var transactiondate	= 	$("#transactiondate").val().trim()
		   if (accountno=='' || surname=='' || amount==''||particulars==''||transactiondate==''){
			   var msg = "One or more inputs are empty or not correct";
			   alert(msg);				
		   }else{
			   var frmValues = $("#frmobj").serialize()+ "&TC="+'CW';
			   $.post("managetransactions.php",frmValues).done(function(data){
				   if (data==1){
					   alert("Cash Withdrawal Successfull!");
					   $("#accountno").val('');
					   startup();
				   }else if(data==-1){
					   var msg = "Cash withdrawal transaction declined due to insuffient fund";
					   alert(msg);
					   getaccountbalance(accountno);
				   }else{
					   alert(data);
				   }
			   });
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