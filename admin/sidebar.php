			<?php
				error_reporting(0);
				//session_start();
				/*
				if(!isset($_SESSION['PassTag'])){
					echo "ACCESS DENIED. Bypassing the Login Page";
					exit;
				}else if($_SESSION['PassTag']!='UA@Go'){
					echo "ACCESS DENIED. Required Parameter not Set";
					exit;		
				}
				*/
			?>
			<ul class="page-sidebar-menu">
				<li>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone"></div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>

				
				<li >
					<a href="javascript:;">
					<i class="icon-cogs"></i> 
					<span class="title">Pay Loan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
						<li >
							<a href="checkrecord.php">
							Check Record</a>
						</li>
						<li >
							<a href="savings.php">
							Savings</a>
						</li>
						<li >
							<a href="investment.php">
							Investment</a>
						</li>
						<li >
							<!-- Deactivate, Reactivate and Close Account -->
							<a href="outstanding.php">
							Outstanding loan</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-bookmark-empty"></i> 
					<span class="title">Manage Transactions</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li >
							<a href="income_expenses.php">
							Income And Expenses</a>
						</li>
						<li >
							<a href="payment.php">
							Payment</a>
						</li>
					</ul>
				</li>
				<li >
					<a href="javascript:;">
					<i class="icon-table"></i> 
					<span class="title">Utilities</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						
						<li >
							<a href="contact.php">
							Contact-us</a>
						</li>
						<li >
							<a href="approved.php">
							Approved Customers</a>
						</li>
						<li >
							<a href="addadmin.php">
							Add Admin</a>
						</li>
						<li >
							<a href="removeadmin.php">
							Remove Admin</a>
						</li>
					</ul>
				</li>
				<li class="last ">
					<a href="#" onclick="passParameter('LO-logout.php')">
					<i class="icon-bar-chart"></i> 
					<span class="title">Logout</span>
					</a>
				</li>
			</ul>
			<script>
				function passParameter(x){
					var linkarr = x.split("-");
					var PageRef = linkarr[1];
					var PageData = "PCode="+ linkarr[0];
					$.post("linkmanager.php",PageData).done(function(data){
						window.location.href = PageRef;
					});
				}
			</script>