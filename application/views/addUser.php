<?php
require 'header.php';
?>

<div class="container">
    <div class="row">
        <h2 style="text-align: center"><strong>Sign in FORM</strong></h2>
        <div class="col-lg-offset-3 col-lg-6">
            <?php
            echo form_open('http://bpizza.app/index.php/Users/add');
            echo form_label('User name');
            echo form_input(array('id'=>'name', 'name'=>'name','placeholder'=>'User name', 'class'=>'form-control', 'required'=>'required'), set_value('name'), 'autofocus');
            echo '<div class="error_control">'.form_error('name').'</div>';
            echo form_label('E-mail');
            echo form_input(array('id'=>'email', 'name'=>'email','placeholder'=>'E-mail', 'class'=>'form-control', 'required'=>'required'), set_value('email'));
            echo '<div class="error_control">'.form_error('email').'</div>';
            echo form_label('Password');
            echo form_input(array('id'=>'passwd', 'name'=>'passwd', 'type'=>'password','placeholder'=>'Passord','class'=>'form-control', 'required'=>'required'), set_value('passwd'));
            echo '<div class="error_control">'.form_error('passwd').'</div>';
            echo form_label('Address');
            echo form_input(array('id'=>'address', 'name'=>'address','placeholder'=>'Your address', 'class'=>'form-control', 'required'=>'required'), set_value('address'));
            echo '<div class="error_control">'.form_error('address').'</div>';
            echo form_label('Phone number');
            echo form_input(array('id'=>'phone', 'name'=>'phone','placeholder'=>'Your phone number', 'class'=>'form-control', 'required'=>'required'), set_value('phone'));
            echo '<div class="error_control">'.form_error('phone').'</div>';
            echo '<br />';
            echo form_submit(array('id'=>'btnSubmit', 'name'=>'btnSubmit'), 'Register');

            echo form_close();
            ?>

        </div>

    </div>
</div>


<?php
require 'footer.php';
?>