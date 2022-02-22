<?php
include('config.php');

$messeeges=array();
 

if(isset($_POST["submit"]) )

{  
    $flag=0;
    $name=$_POST["name"];

 $email=$_POST["email"];
 $messege=$_POST["message"];
 //echo "$name$email";
 if(empty($_POST["name"]) ||  (strlen($name)>$name_length))
 $messeeges[]="unvalid name";
  else 
    $flag++;
 if(empty($_POST["email"]) ||  !filter_var($email, FILTER_VALIDATE_EMAIL))
 $messeeges[]="unvalid email";
    else 
    $flag++;

 if(empty($_POST["message"]) ||  (strlen($messege)>$messg_length))
 $messeeges[]="unvalid message";
 else 
    $flag++;
 if( $flag===3)
 {$sucess="sucess name is $name  $email  $messege";
 write_to_file($email,$name);}


foreach( $messeeges as $line)  
echo " **$line <br>";

echo $sucess;



}
function default_text($text)
{ if(isset($_POST["submit"]) )
   {echo $_POST[$text];}
   else {
       echo'';
   }
  

}
function write_to_file($email,$name)
{ $today = date("F j, Y, g:i a"); 
    echo "$today ";  
    $ip = $_SERVER['REMOTE_ADDR'];  
    echo " $ip";
    $myfile = fopen("log.txt", "a+");
    $text="$today , $ip ,$email,$name \r\n";
     fwrite($myfile,  $text);
     fclose($myfile);
    
    
}


?>
<html>
    <head>
        <title> contact form </title>


    </head>

    <body>
        <h3> Contact Form </h3>
        <div id="after_submit">
            
        </div>
        <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">

            <div class="row">
                <label class="required" for="name">Your name:</label><br />
                <input id="name" class="input" name="name" type="text" value='<?php  default_text("name");?>' size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="email">Your email:</label><br />
                <input id="email" class="input" name="email" type="text" value="<?php  default_text("email");?>" size="30" /><br />

            </div>
            <div class="row">
                <label class="required" for="message">Your message:</label><br />
                <textarea id="message" class="input" name="message" ows="7" cols="30"> <?php  default_text("message" );?></textarea> <br />

            </div>

            <input id="submit" name="submit" type="submit" value="Send email" />
            <input id="clear" name="clear" type="reset" value="clear form" />

        </form>
    </body>

</html>