<?php 

$id = $_GET['id'];

   include('connection.php');
   
    $sel_query=mysqli_query($conn, "UPDATE briefs SET status='1' WHERE id='$id'") or die(mysql_error($conn)); 
    if($sel_query){
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else{
        echo mysqli_error($conn);
    }
  
?>