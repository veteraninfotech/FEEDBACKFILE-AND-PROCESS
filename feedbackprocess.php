<?php
    session_start();
    include('includes/function.php');

    if(!isset($_SESSION['sid']))
    {
       header('index.php');
    }



$checkStatus = (isset($_POST['Feedback']) && $_POST['Feedback']
) ? true : false;


$Feedback = $_POST['Feedback'];
$dateTime = date('Y-m-d H:i:s'); 
// print_r($_POST);
//  die;

if (empty($_POST['Feedback'])) {
    header("location:feedback1.php?e=1&m=enter feedback");
    exit;

}

if($checkStatus)
{
    $sql8 = "INSERT INTO `feedback` (`Feedback`,`datetime`,`userid`) VALUES ( '" . $Feedback . "','" . $dateTime . "','" . $userid . "')";
    // print_r($sql8);
    // die;
    $res = mysqli_query($conn,$sql8);

    if($res){
        header('feedback1.php?m=2');
    }

    header('feedback1.php?m=1');
}
header('feedback1.php?m=1');