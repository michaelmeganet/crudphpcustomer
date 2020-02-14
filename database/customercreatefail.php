<?php
include 'header.php';
include_once("./class/dbh.inc.php");
include_once("./class/variables.inc.php");
//$customer_list = $customer_obj->customer_list();
$objCustomer = new Customers();
$customer_list = $customer_obj->customer_list();
$customer_list_numrows = $objCustomer->customer_list_numrows();
$error = $_GET["err"];
?>
<div class="container " > 
    <div class="row content">
        <a  href="create-customer-info.php"  class="button button-purple mt-12 pull-right">Create Customer</a> 
        <h3>Failed to create Customer</h3>
        
        <p><?php echo $error;
        
        ?> </p>
        

    </div>
</div>
<?php
include 'footer.php';
?>  

