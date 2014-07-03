<?php
function readTrans()
{
    $file = "transaction.txt";
    $fp = fopen($file, "r");
    if (!$fp)
    {
        echo "<p>Could not open the data file. System down. Please try later.</p>";
    }
    else
    {
        $transData = fgets($fp);
        while (!feof($fp))
        {
            $transArray = explode(" ", $transData);
            $type = $transArray[0];
            $amount = $transArray[1];
            $balance = $transArray[2];
            if ($type == "w")
            {
                echo "<tr>\n";
                echo "<td>Withdrawal</td>\n";
                echo "<td>$amount</td>\n";
                echo "<td>$balance</td>\n";
                echo "</tr>\n";
            }
            else
            {
                echo "<tr>\n";
                echo "<td>Deposit</td>\n";
                echo "<td>$amount</td>\n";
                echo "<td>$balance</td>\n";
                echo "</tr>\n";
            }
            $transData = fgets($fp);            
        }
        fclose ($fp);
    }

}
?>