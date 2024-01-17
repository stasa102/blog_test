<?php
/* Smarty version 4.3.4, created on 2024-01-17 15:36:10
  from '/var/www/blog_test/_templates/admin/a_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a7f3ea8afed6_89256584',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b4e21175b85396da21d7217f5538bd5cdcfbc32' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/a_header.tpl',
      1 => 1705505767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65a7f3ea8afed6_89256584 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <title>Admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="../css/admin.css" rel="stylesheet" media="screen">
    <?php echo '<script'; ?>
 src="../js/vendor/jquery-3.3.1.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    
    
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
  	<?php if (($_smarty_tpl->tpl_vars['logged_user']->value->getAdmin())) {?>                	   <li><a <?php if (($_smarty_tpl->tpl_vars['selected']->value == "users")) {?>style="background-color:#fff; color:#000;"<?php }?> href="admin_users.php">Admin panel users </a></li>
       <li><a <?php if (($_smarty_tpl->tpl_vars['selected']->value == "users")) {?>style="background-color:#fff; color:#000;"<?php }?> href="admin_categories.php">Categories </a></li>
       <li><a <?php if (($_smarty_tpl->tpl_vars['selected']->value == "users")) {?>style="background-color:#fff; color:#000;"<?php }?> href="admin_posts.php">Posts </a></li>
       <li><a <?php if (($_smarty_tpl->tpl_vars['selected']->value == "users")) {?>style="background-color:#fff; color:#000;"<?php }?> href="admin_pages.php">Pages </a></li>
       <li><a <?php if (($_smarty_tpl->tpl_vars['selected']->value == "users")) {?>style="background-color:#fff; color:#000;"<?php }?> href="admin_slider_image.php">Slider Image </a></li>
       <li><a <?php if (($_smarty_tpl->tpl_vars['selected']->value == "users")) {?>style="background-color:#fff; color:#000;"<?php }?> href="admin_gallery_album.php">Gallery Album </a></li>
    <?php }?>
    <br style="clear: left;" />
  </ul>
</div>

<div style="margin-bottom:40px;"></div>


<!-- page body starts below --> <?php }
}
