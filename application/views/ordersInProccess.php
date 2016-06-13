<?php
require 'header.php';
?>
<div class="container">
<h1 style="text-align: center">Orders to do:</h1>
    <?php foreach($inProccess as $item){?>
    <div style="border: solid #000000 1px">
        <h3><?php echo 'Order number: '.$item['order_nr'];?></h3>
        <?php
            $this->load->model('Order_model');
            $temp = new Order_model();
            $orders = $temp->selectedOrders($item['order_nr']);

            $this->load->model('User_model');
            $usr = new User_model();
            $usr_info = $usr->getUserById($item['user_id']);
        ?>
    <table class="table table-striped">
        <tr>
            <th>Pizza size</th>
            <th>Quantity</th>
            <th>Toppings</th>

        </tr>

        <?php foreach($orders as $curr_order){?>
            <tr>
                <td><?php echo $curr_order['pizza_type'];?></td>
                <td><?php echo $curr_order['qty'];?></td>
                <td><?php echo $curr_order['description'];?></td>
            </tr>
        <?php }?>

    </table>

        <button type="button" class="btn" style="margin: 20px 30px;"><a href="http://bpizza.app/index.php/Order/readyOrder?ord_nr=<?php echo $item['order_nr'];?>">Ready!</a></button>
        <span class="pull-right"><strong>Delivery to address: <?php echo $usr_info[0]['address']?>, Phone number: <?php echo $usr_info[0]['phone']?></strong></span>
    </div>
    <?php }?>

</div>
<?php
require 'footer.php';
?>