<?php
use Illuminate\Database\Capsule\Manager as Capsule;
$id=$_GET["glass"];
if(Capsule::table("items")->where("id","=","$id")->exists())
$item = Capsule::table("items")->where("id","=","$id")->first();
else
die("not exist");
?>
<html>


<h3>name:<?php  echo $item->product_name  ?></h3>
<h3>country:<?php  echo $item->CouNtry ?></h3>
<h2> <img src='Resources/images/<?php echo $item->Photo;?>'> </h2>;


</html>