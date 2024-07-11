<?php
	$con = mysqli_connect("localhost","root","","db_lms") or die("Database Connection Error");
	extract($_GET);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .fit-content-box {
        width: fit-content;
        padding: 2%;
        height: fit-content;
      }
      .bold_texts{
        font-weight: bold;
        padding-left: 4%;
        text-transform: uppercase;
      }
      .signature{
        text-align: center;
        margin-left: 4%;
        margin-top: 3%;
      }
      .line{
        text-decoration: underline;
      }
    </style>
</head>
<header style="text-align: center;">
    <h3> HEIGHT RESOURCES MANAGEMENT INTERNATIONAL LIMITED </h3>
</header>
<body class="fit-content-box">                                                                                                                             
    <address style="text-align: right;">
        52 Ijaye road Ogba Lagos state.<br>
         08035794364.<br> 
        support@greaterheightng.com<br>
        Date: <?php echo $dob; ?><br>   
     </address>
                    
    <h4 style="text-align: center;">OFFER LETTER OF LOAN FACILITY OF THE SUM OF NGN<?php echo $loan_amount; ?><br></h4>
    
    <p style="text-indent: 1%;">
        Offer letter for the sum of NGN<?php echo $loan_amount; ?><br>with reference to your application received on <span id=""><?php echo $dob; ?></span><br> for a facility, we are pleased to inform you that Greater Heights Resources is willing to make the facility available to you under the following terms and conditions:
        <p>
            <span class="bold_texts">Lender: GREATER HEIGHT RESOURCES MANAGEMENT INTERNATIONAL LIMITED</span><br>
            <span class="bold_texts">Reference Number: <span id=""></span><?php echo $ref_no; ?></span><br>
            <span class="bold_texts">Full Name</span>: <span id=""><?php echo $name; ?></span><br>
            <span class="bold_texts">Amount</span>: <span id=""><?php echo $loan_amount; ?></span><br>
            <span class="bold_texts">Purpose of loan</span>: <span id=""><?php echo $purpose_of_loan; ?></span><br>
            <span class="bold_texts">Repayment Period</span>: <span id=""><?php echo $repayment_period; ?></span><br>
            <span class="bold_texts">Interest (3.75%)</span>: <span id=""><?php echo $interest; ?></span><br>
            <span class="bold_texts">Monthly Repayment</span>: <span id=""><?php echo $monthly_repayment; ?></span><br>
        </p>
    </p>
    <h4>Conditions Precedent to Drawdown:</h4>
    <p style="text-indent: 1%;">
        Receipt of application letter and offer letter duly completed and accepted by the borrower; collection of <span>borrowers’ presigned cheques with other relevant stated documents with that of the guarantor’s.</span> Non-refundable processing/management fee would be deducted from the loan amount before disbursement, No cash payment would be accepted on any condition all payments must be made into Greater Height Resources account. In case of any default the borrower shall be liable to pay all reasonable legal fees should the default lead to litigation or otherwise and other costs reasonably incurred to ensure repayment shall be settled by the borrower or the guarantor as the case may be. Loan liquidation initiated by the borrower within the month before payday attracts full interest, all other parties to this note whether as a guarantor, or a surety agree to remain fully bound until this loan is fully paid and further agree to remain bound notwithstanding extension or modification of the facility. Also the default charges is 1.5% daily of the loan amount multiplied by the number of days been defaulted. <br>
        Greater Height Resources loan is structured against monthly salary; therefore customers cheque will be presented for payment as soon as the monthly salary is paid irrespective of repayment date also direct debit will be set against payment date. Greater Height Resources reserves the right to call in the facility during or after the specific tenor without further recourse to the customer. </br>
    </p>
    <h4>Acceptance of Loan</h4>
    <p style="text-indent: 1%;">
    I <span id="name"><?php echo $name; ?></span> have read and understood and accept the terms of this facility. I understand and     accept that Greater Height Resources has the right to call in the guarantor or mortgage the property pledge on the terms of payment without further recourse to me.
    This consent is given willingly by me.
    </p>
    <div style="display: flex; flex-direction: row; justify-content: space-around; margin-top: 3%; margin-bottom: 3%;">
        <div>
            <h4 class="signature">Signature&Date</h4>
            <pre class="line">                   </pre>
        </div>
        <div>
            <h4 class="signature">Signature&Date</h4>
            <pre class="line">                   </pre>
        </div>
    </div>
</body>
</html>