<?php
include 'header.php';


if (isset($_GET['id'])) {
    $post = $_POST;

    $getid = $_GET['id'];
    echo "\$getid = $getid <br>";
    echo "print_r(\$post) : <br>";
    print_r($post);
    $customer_info = $customer_obj->view_customer_by_cid($_GET['id']);
    if (isset($_POST['update_customer']) && $_GET['id'] === $_POST['cid']) {
//        $customer_obj->update_customer_info($_POST);
        $customer_obj->update($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " >
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">View customer List</a>
        <h3>Update customer Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form name="updateForm" id= "updateForm" method="post" action="">
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
            }
            ?>


            <input type="submit" class="button button-green  pull-right" name="update_customer"  id="update_customer" value="Update"/>
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
<script>
    var $my_form = $("#updateForm");
    $my_form.validate(function($form, e) {
        alert("submitted")
    })
</script>
</body>
</html>

