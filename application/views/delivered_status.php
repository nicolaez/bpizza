<?php
require 'header.php';
require 'nav_client.php';
?>

    <div class="container">
        <div class="row">
            <h2 style="text-align: center"><strong>Check Order Status</strong></h2>
            <div class="col-lg-offset-3 col-lg-6">
                <br /><br /><br />
                <?php
                    foreach($ord_check as $item){
                        if($item['order_nr'] == $_SESSION['chek_ord'] && $_SESSION['logged_in']['id']==$item['user_id']){
                            if($item['status'] == 1){
                                echo '<h2 style="text-align: center">Your order is delivered</h2>';
                            }
                            else{
                                echo '<h2 style="text-align: center">Your order is in proccess</h2>';
                            }
                        }
                        else
                            echo '<h2 style="text-align: center">Your order number is incorrect</h2>';
                    }
                ?>

                <br /><br /><br />
                <h3 style="text-align: center">Thank you for choosing BEST Pizza</h3>
            </div>

        </div>
    </div>

<?php
require 'footer.php';
?>