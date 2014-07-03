<!DOCTYPE html >
<html lang="en" >
<head>
    <title>
      Test Withdrawal
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
<h1>Testing Account Balance</h1>
<?php
include 'getBalance.php';
$returnValue = readBalance();
echo "<p>Starting Balance: ";
printf ("%01.2f", $returnValue);
echo "</p>";
?>
<h1>Testing Withdrawal Page</h1>
<form method="post" action="makeWithdrawal.php" enctype="application/x-www-form-urlencoded">
    <p>Withdrawal Amount: <input type="text" name="withdrawalAmount" id="withdrawalAmount"></p>
    <p><input type="submit" id="makeWithdrawal" value="Make Withdrawal"></p>
</form>
      



<!-- external javascript for validation -->  
<script type="text/javascript" src="../validation.js">
</script>    

</div>
  </body>
  </html>
