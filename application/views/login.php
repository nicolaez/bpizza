<!DOCTYPE html>
<html>
<head>
    <title>BEST Pizza</title>
    <link href="http://bpizza.app/assets/css/general-styles.css" rel="stylesheet">
    <link href="http://bpizza.app/assets/css/home-styles.css" rel="stylesheet">
</head>
<body>
<header>
    <div id="klf-logo-box"><img src="http://bpizza.app/assets/images/pizza-logo.png"/></div>
    <div id="lombardis-logo-box"><img src="http://bpizza.app/assets/images/pizza-phone.png"/></div>
    <div class="clear"></div>
</header>
<div id="main-container">
    <div id="login-form">
        <?php echo form_open('http://bpizza.app/index.php/Auth_Controller'); ?>
        <div id="form-box">
            <div class="form-element-box">
                <label for="email" style="background-color: ghostwhite">EMAIL</label><br/><br/>
                <input type="text" name="email" id="email" class="text-box-style" required="required"/><br/>
            </div>
            <div class="form-element-box">
                <label for="password" style="background-color: ghostwhite">PASSWORD</label><br/><br/>
                <input type="password" name="password" id="password" class="text-box-style" required="required"/><br/>
            </div>
            <div class="form-element-box submit-box">
                <input type="submit" class="submit-style" name="signin" id="signin" value="" />
            </div>
        </div>
        <?php echo form_close();?>
        <div style="padding-top: 15px;">
            <a href="http://bpizza.app/index.php/Users">
                <h4 style="color: #ffffff; font-size: 18px;">
                    <span style="background-color: #000000; margin-left: 15px; padding: 5px 10px;">CREATE AN ACCOUNT</span>
                <h4>
            </a>
        </div>
    </div>

</div>
<footer>
    <div id="bookmark"><img src="assets/images/bookmark.jpg" hspace="7" />BOOKMARK THIS PAGE!</div>

</footer>

</body>
</html>
