<?php
include 'conn.php';
$id=$_GET['id'];
$TbName=$_GET['TbName'];
$Tbid=$_GET['Tbid'];
$status=true;

$del="delete from $TbName where $Tbid=$id";
echo $id;
echo $TbName;
if($sql->query($del)===TRUE){
    header("Location:adminn.php");
}

else{
    $status=false;
}
echo json_encode($status);
?>