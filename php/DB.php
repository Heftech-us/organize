<?php
include 'g_var.php';



if($_GET["task"] == "add"){
  $isAddBill = true;
  include 'create_database.php';
  include 'create_table.php';
  include 'insert_into.php';
  echo "<script>window.location = 'http://organize.heftech.us/index.php'</script>";
}else{
  $isAddBill = false;
}
if($_GET["task"] == "get"){
  $isGetBill = true;
  echo "<script>window.location = 'http://organize.heftech.us/display_data.php'</script>";
}else{
  $isGetBill = false;
}

function jsLog($output){
  echo "<script>console.log('$output')</script>";
}
?>