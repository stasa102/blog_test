<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:21:24
  from '/var/www/blog_test/_templates/admin/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55b84d54048_27619621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f674c650e763a14505a1fb4afa26516441e92613' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/login.tpl',
      1 => 1535752962,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a55b84d54048_27619621 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Le styles -->
    <link href="../css/login.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

      <form class="form-signin" name="form1" method="post" action="">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" class="input-block-level" placeholder="Email address" name="user">
        <input type="password" class="input-block-level" placeholder="Password" name="pass">
        <br>
        <button class="btn" type="submit">Sign in</button>
        <input name="login" type="hidden" id="login" value="1">
      </form>

    </div> <!-- /container -->

  </body>
</html>
<?php }
}
