<?php
require 'header.php';
require 'nav_client.php';
?>

<div class="container">
    <div class="row">
        <div class="col-lg-offset-3 col-lg-7">
            <h3>Order number: <?php echo $_SESSION['my_order'];?></h3>
            <table class="table table-striped">
                <tr>
                    <th>Pizza size</th>
                    <th>Quantity</th>
                    <th>Toppings</th>
                    <th>Price</th>
                </tr>
                <?php $total_ord=0;?>
            <?php foreach($myOrder as $item){?>

                <tr>
                    <td><?php echo $item['pizza_type'];?></td>
                    <td><?php echo $item['qty'];?></td>
                    <td><?php echo $item['description'];?></td>
                    <td><?php echo $item['total'];?></td>
                </tr>

            <?php $total_ord+= $item['total'];}?>
            </table>
        </div>

       <div class="col-lg-offset-8 col-lg-2">
           <h4 style="text-align: right;"><strong>Total Order: <?php echo $total_ord?></strong></h4>
       </div>
        <div class="col-lg-offset-3 col-lg-2">
            <a href="http://bpizza.app/index.php/Order"><button type="button" class="btn btn-success">Order an other pizza</button></a>
        </div>
    </div> <!-- end row -->
</div> <!-- end container -->



<?php
require 'footer.php';
?>