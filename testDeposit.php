<!DOCTYPE html >
<html lang="en" >
<head>
    <title>
      Test Deposit
    </title>    
    <meta charset="utf-8" />


 <!-- This is where your link tag goes when linking to an external style sheet. -->
 
<!--This is the format you will use when entering JavaScript -->    
<script type="text/javascript">
/* <![CDATA[ */

// your JavaScript instructions will go here

/* ]]> */
</script>    
    
</head>

  <body> 
 <div> 
<!-- Your XHTML here -->
<h1>Current Account Balance</h1>
<?php
include 'getBalance.php';
$returnValue = readBalance();
echo "<p>Starting Balance: ";
printf ("%01.2f", $returnValue);
echo "</p>";
?>
<h1>Specify Deposit Amount</h1>
<form method="post" action="addBalance.php" enctype="application/x-www-form-urlencoded">
    <p>Deposit Amount: <input type="text" name="depositAmount" id="depositAmount"></p>
    <p><input type="submit" id="makeDeposit" value="Make Deposit"></p>
</form>
      



<!-- external javascript for validation -->  
<script type="text/javascript" src="../validation.js">
</script>    

</div>
  </body>
  </html>
