
<div class="container">

    <h1 style="text-align: center; font-weight: bold; ">Welcome to BEST Pizza</h1>
    <div class="col-lg-offset-3 navbar">
        <nav class="navbar-inner">
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="http://bpizza.app/index.php/Order">Order Pizza</a></li>
                <li role="presentation"><a href="http://bpizza.app/index.php/Order/myOrder">My Current Order</a></li>
                <li role="presentation"><a href="http://bpizza.app/index.php/Order/checkOrder">Check status of Order</a></li>

            </ul>
            <form class="navbar-form pull-right">
                <h5><strong><?php echo $_SESSION['logged_in']['name']?></strong></h5>
                <button type="button" class="btn"><a href="http://bpizza.app/index.php/Auth_controller/logout">Logout</a></button>
            </form>
        </nav>
    </div>
</div>
