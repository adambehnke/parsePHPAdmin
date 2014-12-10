<?php include('_header.php'); ?>

<style type="text/css">
</style>


<div class="product_container">
<div class="outer-center">
<div class="product inner-center">

<h1>Air App Administration Area</h1>
<h3>Login</h3>

<form id="form" method="post" action="index.php" name="loginform">
  <div id="block">
    <input type="text" name="user_name" id="user_name" placeholder="Username" required/>
    <input type="password" name="user_password" id="user_password" placeholder="Password" autocomplete="off" required />
    <input id="submit" type="submit" name="login" value="Go" />
  </div>
</form>

<div id="option">
<a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
</div>


</div>
</div>
</div>

<?php include('_footer.php'); ?>
