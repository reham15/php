<?php
class counter
{

  public static function update_counter( $count)
  {
     $file=fopen("counter.txt","w+");
     fwrite($file,$count);
     fclose($file);
     


  }


  public static function get_count()
  {
    $file=file("counter.txt");
    $count=$file[0];
    return $count;


  }






}