<?php

include 'header.php';
include_once("./class/dbh.inc.php");
include_once("./class/variables.inc.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

print_r($_POST);
echo "<br>";
$customer_obj = new Customers();
//$customer_list = $customer_obj->customer_list();
if (isset($_POST['create_customer'])) {
	unset($_POST['create_customer']);
    $customer_obj->create($_POST);
}


