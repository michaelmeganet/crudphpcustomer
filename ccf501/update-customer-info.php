<?php
include 'header.php';


if (isset($_GET['id'])) {
    $post = $_POST;
    
    $getid = $_GET['id'];
    #echo "\$getid = $getid <br>";
    #echo "print_r(\$post) : <br>";
    #print_r($post);
    $customer_info = $customer_obj->view_customer_by_cid($_GET['id']);
    if (isset($_POST['update_customer']) && $_GET['id'] === $_POST['cid']) {
        unset($_POST['update_customer']);

        #inserts current date into $postdata
        $_POST['change_date'] = date('Y-m-d'); //--> gets current date as modification date  
        $customer_obj->update($_POST); //--->change function here
    }
} else {
    header('Location: index.php');
}
?>
<div class="container" > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">View customer List</a> 
        <h3>Update customer Info</h3>
        <?php    
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "<br>
                  Click <a href='./index.php'>here</a> to return.</p>";
            unset($_SESSION['message']);
            if ($_SESSION['success']){
                echo "<script type='text/javascript'>redirectToIndex();</script>";
                unset($_SESSION['success']);
            }
        }
        ?>

        <hr/>
        <form name="updateForm" id= "updateForm" method="post" action="" onsubmit="return updateValidate()">
 <!--            <div class="control-group form-group">-->
     <?php
            foreach ($customer_info as $key => $value) {
                $keyname = $key;
                $keyvalue = $value;

                echo "<div class=\"control-group\">
                    <label for=\"$keyname\" >$keyname*</label><br>
                    <input type=\"text\" class =\"input-sm form-control\" name=\"$keyname\" id=\"$keyname\" value= \"$value\" width=\"200\"  maxlength=\"50\"";
                  
               
                echo "     <p class=\"help-block\"></p>                  
                </div>";
                //note from ccf501
                //this code loops using database column values as the base, 
                //so i cannot force input the value of 'change_date'.
                //for now i put the automation of this value during the update process above. (line 16-17)
            }
                ?>
            
            
            <input type="submit" onclick="" class="button button-green  pull-right" name="update_customer"  id="update_customer" value="Update"/>
        </form> 
    </div>
</div>


<hr/>
<?php
include 'footer.php';
?>
<script type="text/javascript" src="./assets/jquery.min.js"></script>
<script type="text/javascript" src="./assets/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/validate.min.js"></script>
<script type="text/javascript" src="./assets/validate_helper.min.js"></script>

</body>
</html>

