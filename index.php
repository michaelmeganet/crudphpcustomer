<?php
include 'header.php';
include_once("./class/dbh.inc.php");
include_once("./class/variables.inc.php");
//$customer_list = $customer_obj->customer_list();
$objCustomer = new Customers();
$customer_list = $customer_obj->customer_list();
$customer_list_numrows = $objCustomer->customer_list_numrows();
?>
<div class="container " >
    <div class="row content">
        <a  href="create-customer-info.php"  class="button button-purple mt-12 pull-right">Create Customer</a>

        <h3>Customer List</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Company Name</th>
                    <th>Account No</th>
                    <th>Address 1</th>
                    <th>Account Email</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($customer_list_numrows > 0) {
                    $rows = $customer_list;
                    foreach ($rows as $row) {


//  while ($row = $student_list->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["co_name"] ?></td>
                            <td><?php echo $row["accno"] ?></td>
                            <td><?php echo $row["address1"] ?></td>
                            <td><?php echo $row["email_acc"] ?></td>
                            <td class="text-right">
                                <a  href="<?php echo 'delete-customer-info.php?id=' . $row["cid"] ?>" class="button button-red">Delete</a>
                                <a  href="<?php echo 'update-customer-info.php?id=' . $row["cid"] ?>" class="button button-blue">Edit</a>
                                <a href="<?php echo 'read-customer-info.php?id=' . $row["cid"] ?>" class="button button-green">View</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>

