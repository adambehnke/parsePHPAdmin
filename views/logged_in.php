<?php include('_header.php'); ?>

<div id="loginInfo">
  <?php
  echo WORDING_YOU_ARE_LOGGED_IN_AS . $_SESSION['user_name'] . "<br />";
  ?>
  <a href="index.php?logout"><?php echo WORDING_LOGOUT; ?></a>
</div>

<div class="clear"></div>

<div class="product_container">
<div class="outer-center">
<div class="product inner-center">

<h1>Admin Area</h1>

<?php
$posts = Post::getPostData();
print_r($posts);
?>


</div>
</div>
</div>


<?php include('_footer.php'); ?>
