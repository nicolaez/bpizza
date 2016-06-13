<?php
require 'header.php';
require 'nav_client.php';
?>

    <div class="container">
        <div class="row">
            <h2 style="text-align: center"><strong>Check Order Status</strong></h2>
            <div class="col-lg-offset-3 col-lg-6">
                <?php
                echo form_open('http://bpizza.app/index.php/Order/checkOrderStatus');
                echo form_label('Order number');
                echo form_input(array('id'=>'ord_number', 'name'=>'ord_number','placeholder'=>'Enter your order number for check', 'class'=>'form-control', 'required'=>'required'), set_value('ord_number'), 'autofocus');
                echo '<div class="error_control">'.form_error('ord_number').'</div>';

                echo '<br />';
                echo form_submit(array('id'=>'btnSubmit', 'name'=>'btnSubmit'), 'Check');

                echo form_close();
                ?>

            </div>

        </div>
    </div>

<?php
require 'footer.php';
?>