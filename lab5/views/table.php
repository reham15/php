<?php

echo "<table border='1'>";
$record_index = 0;
foreach ($all_requrds as $item) {
    if ($record_index === 0) {
        echo "<tr>";
        echo "<td> Name </td>";
        echo "<td> Price </td>";
        echo "<td> Country </td>";
        echo "<td> photo </td>";
        echo "<td> about</td>";



        echo "</tr>";
    }
    echo "<tr>";
    $image=explode(".",$item->Photo);
    $image=$image[0]."tz".".png";
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
    $CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $CurPageURL =explode("?",$CurPageURL );
    $details=$CurPageURL [0]."?glass="."$item->id";
        echo "<td>".$item->product_name ."</td>";
        echo "<td>".$item->list_price ."</td>";
        echo "<td>".$item->CouNtry ."</td>";
        echo "<td> <img src=' Resources/images/".$image." ' </td>";
        echo "<td> <a href=' ".$details." '> more</a> </td>";
    echo "</tr>";

    $record_index ++;
}
echo "</table>";
?>
<div> 
    <a href="<?php echo $previous_link;  ?>"> << Prev </a> | <a href="<?php echo $next_link;  ?>">  Next >> </a>
</div>
<br>
<form method="get"> 
<input type="text" placeholder="productName" name="product">
<input type="submit" name="search" value="search">
</form>
