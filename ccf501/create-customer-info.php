<?php
include 'header.php';
if (isset($_POST['create_customer'])) {
    $customer_obj->create_customer_info2($_POST);
}
include './class/phhdate.inc.php';
?>
<script type="text/javascript" src="./assets/jquery-1-7.1.min.js"></script>
<script type="text/javascript" src="./assets/bootstrap.min.js"></script>
<script type="text/javascript" src="./assets/validate.min.js"></script>
<script type="text/javascript" src="./assets/validate_helper.js"></script>
<script>
    var $my_form = $("#createForm");
    $my_form.validate(function($form, e) {
        alert("submitted")
    })
</script>
<div class="container">
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">View Customer List</a>
        <h3>Create Customer Info</h3>
        <hr/>
        <form method="post" action="check-customer-list.php" name="createForm" id="createForm">

            <div class="control-group form-group">
                <div class="control-group">
                    <label for="accno" >Account Number (accno)*</label>
                    <input type="text" name="accno"
                           id="accno" data-rules="required|exact_length[8]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Account No" required
                           value= "ERC/3434"/>
                    <p class="help-block"></p>
                </div>

            </div>
            <div class="control-group form-group  ">
                <div class="control-group">
                    <label for="co_name">Company Name (co_name)*</label>
                    <input type="text"
                           name="co_name"
                           id="co_name"
                           data-rules="required|max_length[100]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Company name"
                           required
                           value= "ccd test Company"/>
                    <p class="help-block"></p>
                </div>

            </div>
            <div class="control-group form-group ">
                <div class="control-group">
                    <label for="co_no" > (co_no)*</label>
                    <input type="text" name="co_no"
                           id="co_no" data-rules="required|max_length[20]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Company No"
                           value= "1234"
                           />
                    <p class="help-block"></p>
                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="co_code">(co_code)*</label>
                    <input type="text" name="co_code"
                           id="co_code" data-rules="required|alpha_numeric|exact_length[3]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Company Code"
                           required
                           value= "CCD"/>
                    <p class="help-block"></p>
                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="address1" >(address1)*</label>
                    <input type="text" name="address1"
                           id="address1" data-rules="required|max_length[100]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Address 1" required
                           value= "ddress1"/>
                    <p class="help-block"></p>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="address2" >(address2)*</label>
                    <input type="text" name="address2"
                           id="address2" data-rules="required|max_length[100]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Address 2"
                           value= "address2"/>
                    <p class="help-block"></p>

                </div>

            </div>

            <div class="form-group">
                <div class="control-group">
                    <label for="address3" >(address3)*</label>
                    <input type="text" name="address3"
                           id="address3" data-rules="required|max_length[100]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Address 3" required
                           value= "addresd3"/>
                    <p class="help-block"></p>

                </div>

            </div>

            <div class="form-group">
                <div class="control-group">
                    <label for="country" >(country)</label>
                    <input type="text" name="country" id="country"
                           data-rules="required|max_length[50]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Country" required
                           value= "Malaysia"/>
                    <p class="help-block"></p>
                </div>

            </div>

            <div class="form-group">
                <div class="control-group">
                    <label for="telephone_sales" >(telephone_sales)</label>
                    <input type="text" name="telephone_sales"
                           id="telephone_sales" data-rules="required|max_length[30]|is_natural"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Sales Phone No."
                           required
                           value= "23232332"
                           />
                    <p class="help-block"></p>
                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="fax_sales">(fax_sales)</label>
                    <input type="text" name="fax_sales"
                           id="fax_sales" data-rules="required|max_length[30]|is_natural"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Fax No."
                           required
                           value= "34344343"/>
                    <p class="help-block"></p>

                </div>

            </div>

            <div class="form-group">
                <div class="control-group">
                    <label for="handphone_sales">(handphone_sales)</label>
                    <input type="text" name="handphone_sales"
                           id="handphone_sales" data-rules="required|max_length[30]|is_natural"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Sales mobile Phone No."
                           required
                           value= "344434433"
                           />
                    <p class="help-block"></p>
                </div>

            </div>

            <div class="form-group">
                <div class="control-group">
                    <label for="email_sales">(email_sales)</label>
                    <input type="text" name="email_sales" id="email_sales"
                           data-rules="required|max_length[50]|valid_email"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Sales E-mail" required
                           value= "sales@gmail.com"/>
                    <p class="help-block"></p>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="attn_sales">(attn_sales)</label>
                    <input type="text" name="attn_sales"
                           id="attn_sales" data-rules="required|max_length[100]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Person in charge (Sales)" required
                           value= "Mr.SSS"/>
                    <p class="help-block"></p>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="telephone_acc">(telephone_acc)</label>
                    <input type="text" name="telephone_acc"
                           id="telephone_acc" data-rules="max_length[30]|is_natural"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Account Phone No"
                           value= "343344343"/>
                    <p class="help-block"></p>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="fax_acc">(fax_acc)</label>
                    <input type="text" name="fax_acc" id="fax_acc"
                           data-rules="max_length[30]|is_natural"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Account Fax No"
                           value= "67767676"/>
                    <p class="help-block"></p>


                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="handphone_acc">(handphone_acc)</label>
                    <input type="text" name="handphone_acc"
                           id="handphone_acc" data-rules="max_length[30]|is_natural"
                           class="validate input-medium input-xlarge  form-control"
                           placeholder="Account Handphone No"
                           value= "89989899"/>
                    <p class="help-block"></p>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="email_acc">(email_acc)</label>
                    <input type="text" name="email_acc"
                           id="email_acc" data-rules="required|valid_email"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Account Email"
                           value= "acc@gmail.com"/>
                    <p class="help-block"></p>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="attn_acc">(attn_acc)</label>
                    <input type="text"
                           name="attn_acc" id="attn_acc"
                           data-rules="max_length[100]"
                           class="validate input-medium input-xlarge  form-control"
                           placeholder="Person in charge (Account)"
                           value= "Mr.acc"/>
                    <p class="help-block"></p>


                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label  for="groups">(groups)</label>
                    <input type="text" name="groups"
                           id="groups" data-rules="required|max_length[7]|alpha_dash"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Group Name"
                           value= "A"/>
                    <p class="help-block"></p>


                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>Agent ID (In Charge)</p>
                    <select name="aid_cus" id="aid_cus" class="validate input-medium input-xlarge form-control" >
                        <option value="105">105 (S1)</option>
                        <option value="82">82 (C1)</option>
                        <option value="83">83 (C2)</option>
                        <option value="84">84 (C3)</option>
                        <option value="85">85 (C4)</option>
                        <option value="86">86 (C5)</option>
                        <option value="114">114 (N1)</option>
                        <option value="115">115 (N2)</option>
                        <option value="116">116 (N3)</option>
                    </select>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>TERMS</p>
                    <select name="terms" id="terms" class="validate input-medium input-xlarge form-control" >
                        <option value="90 Days">90 Days</option>
                        <option value="60 Days">60 Days</option>
                        <option value="30 Days">30 Days</option>
                        <option selected value="15 Days">15 Days</option>
                        <option value="120 Days">120 Days</option>
                        <option value="P.B.O (Payment Before Order)">P.B.O (Payment Before Order)</option>
                        <option value="COD">COD</option>
                    </select>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="credit_limit">(credit_limit)</label>
                    <input type="number" value="1000" name="credit_limit" id="credit_limit" data-rules="required|max_length[20]|decimal" class="validate input-medium input-xlarge form-control" placeholder="Agent ID (In Charge)" />
                    <p class="help-block"></p>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>Currency</p>
                    <select name="currency" id="currency" class="validate input-medium input-xlarge form-control" >
                        <option selected value="1">Ringgit</option>
                        <option value="0">Rupiah</option>
                    </select>


                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>Company</p>
                    <select name="company" id="company" class="validate input-medium input-xlarge form-control" >
                        <option selected value="PST">PST</option>
                        <option value="PSVPMB">PSVPMB</option>
                    </select>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>Status</p>
                    <select name="status" id="status" class="validate input-medium input-xlarge form-control" >
                        <option selected value="active">active</option>
                        <option value="deleted">deleted</option>
                        <option value="hold">hold</option>
                        <option value="disabled">disabled</option>
                    </select>


                </div>

            </div>
            <?php
            $objDate = new Period();
            $Now = $objDate->getTodayDateDMY();
            ?>
            <div class="form-group">
                <div class="control-group">
                    <p>Date created</p>
                    <select name="date_created" id="date_created" class="validate input-medium input-xlarge form-control" >
                        <option selected <?php echo "value = '$Now' "; ?>>today</option>
                        <option value="last_month">last month</option>
                    </select>


                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="remarks">(remarks)</label>
                    <input type="text" name="remarks" id="remarks"
                           data-rules="max_length[200]"
                           class="validate input-medium input-xlarge form-control"
                           placeholder="Remark"
                           value= "Reamrk s"/>
                    <p class="help-block"></p>


                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <label for="credit_used">(credit_used)</label>
                    <input type="number"value ="0" name="credit_used" id="credit_used" data-rules="max_length[20]|decimal" class="validate input-medium input-xlarge form-control" placeholder="credit used" />
                    <p class="help-block"></p>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>is 1 do 1 invoice ?</p>
                    <select name="one_do_one_inv" id="one_do_one_inv" class="validate input-medium input-xlarge form-control" >
                        <option selected value="yes">yes</option>
                        <option value="no">no</option>
                    </select>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>can not migrate ?</p>
                    <select name="cannot_migrate" id="cannot_migrate" class="validate input-medium input-xlarge form-control" >
                        <option selected  value="yes">yes</option>
                        <option value="no">no</option>
                    </select>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>Regular</p>
                    <select name="regular" id="regular" class="validate input-medium input-xlarge form-control" >
                        <option selected  value="yes">yes</option>
                        <option value="no">no</option>
                    </select>

                </div>

            </div>
            <div class="form-group">
                <div class="control-group">
                    <p>No Busy</p>
                    <select name="nobusy" id="nobusy" class="validate input-medium input-xlarge form-control" >
                        <option selected   value="yes">yes</option>
                        <option value="no">no</option>
                    </select>

                </div>

            </div>




            <input type="submit" class="button button-green  pull-right" name="create_customer" value="Submit"/>

        </form>
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

</body>
</html>

