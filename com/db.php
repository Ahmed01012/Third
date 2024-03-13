<?php
if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
$co=mysqli_connect('localhost','root','','kasper');
$sql="INSERT INTO `themessage` (`mname` , `memail` , `mmessage`) VALUES ('$name','$email','$message') ";
mysqli_query($co , $sql);
}
?>