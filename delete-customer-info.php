<?php
 include 'header.php';

 if(isset($_GET['id'])){
  $customer_info=$customer_obj->delete_customer_info_by_id($_GET['id']);
   $cid = $_GET['id'];
  echo "\$cid = $cid <br>";
    if(isset($cid)){
    //       $student_id= mysqli_real_escape_string($this->conn,trim($cid));
    $cid= trim($cid);

    $sql="DELETE FROM  customer_list  WHERE cid =$cid";
    //        $result=  $this->conn->query($sql);
    echo "\$sql= $sql<br>";
    $objSQL = new SQL($sql);

    $result = $objSQL->getUpdate();        
        if($result){
            $_SESSION['message']="Successfully Deleted Student Info";
        
        }
    }
    //header('Location: index.php'); 
     
 }else{
  header('Location: index.php');
 }
 
 ?>
