<?php
$content=file("log.txt");
foreach($content as $line)
{  if(!empty($line))
  { $var=explode(",", $line );
    echo"<center>";
    echo "<div>";
  echo " visit date : $var[0]  $var[1] $var[2] <br>";
  echo "ip Address:  $var[3]  <br>";
  echo "email: $var[4]   <br>";
  echo "name:  $var[5]   <br>";
    echo "</div>";
    echo "------------------------------------------------------------------------------";
    echo"</center>";}


}