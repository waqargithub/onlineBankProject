<!DOCTYPE html >
<html lang="en" >
<head>
    <title>
      Account Balance
    </title>    
    <meta charset="utf-8" />
    <link rel="stylesheet" href="currencyConversion.css" type="text/css">


 <!-- This is where your link tag goes when linking to an external style sheet. -->
 
<!--This is the format you will use when entering JavaScript -->    
<script type="text/javascript">
/* <![CDATA[ */
function goBack(numberOfPages)
  {
  window.history.go(numberOfPages);
  }
// your JavaScript instructions will go here

/* ]]> */
</script>    
    
</head>

  <body> 
 <div> 
<!-- Your XHTML here -->
<h2>Your Account Balance</h2>
<?php
include 'getBalance.php';
$returnValue = readBalance();
echo '<p>Account Balance: $';
printf ("%01.2f", $returnValue);
echo "</p>";
?>
<p><button onclick="goBack(-1);">Back to Main Page</button></p>
      



<!-- external javascript for validation -->  
<script type="text/javascript" src="../../validation.js">
</script>    

</div>
  </body>
  </html>
