<?php /* Smarty version Smarty-3.1.13, created on 2018-10-15 17:29:31
         compiled from "/Users/milos/htdocs/blog_test/_templates/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7666253675bc4b25ba43507-84050445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98ce97e37d2fb2c5e9bd5adfa9474e458c12fc41' => 
    array (
      0 => '/Users/milos/htdocs/blog_test/_templates/admin/login.tpl',
      1 => 1535752962,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7666253675bc4b25ba43507-84050445',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bc4b25ba8c357_84936507',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc4b25ba8c357_84936507')) {function content_5bc4b25ba8c357_84936507($_smarty_tpl) {?>
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
<?php }} ?>