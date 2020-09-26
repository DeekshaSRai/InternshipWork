<?php
$text="TCET";
$search="T";
$count="0";
for($x="0"; $x< strlen($text); $x++)
  { 
    if(substr($text,$x,1)==$search)
    {
    $count=$count+1;
	 }
  }
echo "T in TCET are ".$count."\n";
?>