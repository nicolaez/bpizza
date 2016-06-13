<?php
require 'header.php';
require 'nav_client.php';
?>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-3">
            <?php
                echo form_open('http://bpizza.app/index.php/Order/add');

                echo form_label('Select type of pizza:');
                echo '<select name="type_pizza" id="type_pizza" class="form-control">';
                $this->load->model('Pizza_model');
                $pizzas = new Pizza_model();
                $types = $pizzas->getAllTypeOfPizza();

                    foreach($types as $type){
                        echo '<option value="'.$type->id.'">'.$type->size.'</option>';
                    }
                echo '</select>';

                echo form_label('Select quantity:');
                echo '<select name="quantity" id="quantity" class="form-control">';
                    for($i=1; $i<=10; $i++){
                        echo '<option value="'.$i.'">'.$i.'</option>';
                    }
                echo '</select>';

                $this->load->model('Topping_model');
                $t1=new Topping_model();
                $toppings = $t1->getAllTopings();
                foreach($toppings as $topping){

                    echo '<label class="checkbox inline">
                            <input type="checkbox" name="myToppings[]" value="'.$topping->id.'">'.$topping->name.'
                        </label>';

                }

                echo form_submit(array('id'=>'btnSubmit', 'name'=>'btnSubmit'), 'Order Me!');

                echo form_close();
            ?>
        </div>
    </div><!-- end row -->
</div><!-- end container -->

<?php
require 'footer.php';
?>

