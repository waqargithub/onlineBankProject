<!DOCTYPE html >
<html lang="en" >
<head>
    <title>
      ATM Transactions
    </title>    
    <meta charset="utf-8" />
    <link rel="stylesheet" href="currencyConversion.css" type="text/css">


 <!-- This is where your link tag goes when linking to an external style sheet. -->
 
<!--This is the format you will use when entering JavaScript -->    
<script type="text/javascript">
/* <![CDATA[ */

// your JavaScript instructions will go here
function goBack(numberOfPages)
  {
  window.history.go(numberOfPages);
  }

/* ]]> */
</script>    
    
</head>

  <body> 
 <div>
 <?php
$withdrawal = (float)$_POST['withdrawalAmount'];

$file = "balance.txt";
$fp = fopen($file, "r");
if (!$fp)
    {
    echo "<p>Could not open the data file.<br>";
    echo "The system is down. Please try back later.</p>";
    echo '<p><button onclick="goBack(-2);">Back to Main Page</button></p>';
    exit;
    }
    else
    {
        $balance = fgets($fp);
        fclose ($fp);
    }
if ($withdrawal > $balance)
{
    echo "<p>There are insufficient funds for this transaction.</p>";
    echo "<p>Please return to Login page for additional transactions.</p>";
    echo '<p><button onclick="goBack(-2);">Back to Main Page</button></p>';
    exit;
}
else
{
    $file = "balance.txt";
    $fp = fopen($file, "w+");
    if (!$fp)
        {
        echo "<p>Could not open the data file.<br>";
        echo "The system is down. Please try back later.</p>";
        echo '<p><button onclick="goBack(-2);">Back to Main Page</button></p>';
        exit;
        }
        else
        {
            $newBalance = $balance - $withdrawal;
            fwrite($fp, "$newBalance");
            fclose ($fp);
        }
        $file = "transaction.txt";
        $fp = fopen($file, "a");
        if (!$fp)
        {
            echo "<p>Could not open the data file.<br>";
            echo "The system is down. Please try back later.</p>";
            echo '<p><button onclick="goBack(-2);">Back to Main Page</button></p>';
            exit;
        }
        else
        {
            $transType = "w";
            fwrite($fp, "$transType $withdrawal $newBalance\n");
            fclose($fp);
        }        
        echo "<p>Thank you for your business.<br>For another transaction, return to the login page.</p>";
        echo '<p><button onclick="goBack(-2);">Back to Main Page</button></p>';
}
?>

<!-- external javascript for validation -->  
<script type="text/javascript" src="../../validation.js">
</script>    

</div>
  </body>
  </html>