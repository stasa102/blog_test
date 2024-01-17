<?php /* Smarty version Smarty-3.1.13, created on 2018-10-15 16:57:41
         compiled from "/Users/milos/htdocs/blog_test/_templates/admin/a_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2586979915bc4aae54f8b33-51183688%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0899ed0616c25c6eaa29dcf0456973600079a84' => 
    array (
      0 => '/Users/milos/htdocs/blog_test/_templates/admin/a_header.tpl',
      1 => 1535752858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2586979915bc4aae54f8b33-51183688',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'logged_user' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bc4aae550f0d5_21086237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc4aae550f0d5_21086237')) {function content_5bc4aae550f0d5_21086237($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <title>Admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="../css/admin.css" rel="stylesheet" media="screen">
    <script src="../js/vendor/jquery-3.3.1.min.js" type="text/javascript"></script>
    
  </head>
<body>

<header class="a_header">
   <div class="a_message" align="center">
        <span id="message" class="message" align="center"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</span>
    </div>
   <div class="header_box" style="float:right;"><input type="button" name="Button" class="button_red" value="Logout" onclick="self.location='login.php?logout=1'"/></div>
   <div class="header_box"><span class="site_name">SITE_NAME </span>/ <a href="admin.php">Admin Panel</a></div>
   <div style="clear:both;"></div>
</header>


<div id="MainAdminNav">
<ul id="MainAdminNavItems">
  	<?php if (($_smarty_tpl->tpl_vars['logged_user']->value->getAdmin())){?>              
  	   <li><a <?php if (($_smarty_tpl->tpl_vars['selected']->value=="users")){?>style="background-color:#fff; color:#000;"<?php }?> href="admin_users.php">Admin panel users </a></li>
    <?php }?>
    <br style="clear: left;" />
  </ul>
</div>

<div style="margin-bottom:40px;"></div>


<!-- page body starts below --> <?php }} ?>