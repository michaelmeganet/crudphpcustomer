<?php
include 'header.php';


if (isset($_GET['id'])) {
    $customer_info = $customer_obj->view_customer_by_cid($_GET['id']);
} else {
    header('Location: index.php');
}
?>
<div class="container " >

    <div class="row content">




        <a  href="index.php"  class="button button-purple mt-12 pull-right">View Customer List</a>

        <h3>View Customer Info</h3>


        <hr/>

    <?php 
       echo '<table border="0" cellspacing="2" cellpadding="2">';
        foreach ($customer_info as $key => $value) {
            $keyname = $key;
            $keyvalue = $value;
            
            //echo "$keyname = $keyvalue <br>";
        
            echo "<tr><td><label >$keyname:  </label></td><td>$value</td></tr> ";
        }
        echo "</table>";
       
    ?>

  



        <a href="<?php echo 'update-customer-info.php?id=' . $customer_info["cid"] ?>" class="button button-blue">Edit</a>





    </div>

</div>
<hr/>
<?php
include 'footer.php';
?>

