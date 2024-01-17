<?php /* Smarty version Smarty-3.1.13, created on 2018-10-15 16:57:41
         compiled from "/Users/milos/htdocs/blog_test/_templates/admin/a_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16609142775bc4aae55125b2-91013878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a172be96751873568007635a9571f58ccda80cd4' => 
    array (
      0 => '/Users/milos/htdocs/blog_test/_templates/admin/a_footer.tpl',
      1 => 1535752844,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16609142775bc4aae55125b2-91013878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bc4aae551a529_18429859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc4aae551a529_18429859')) {function content_5bc4aae551a529_18429859($_smarty_tpl) {?><!-- content ends -->
<?php if ((!empty($_smarty_tpl->tpl_vars['message']->value))){?>
<script type="text/javascript" charset="utf-8" async defer>
    $(".a_message").show().delay(5000).fadeOut('slow');
</script>
<?php }?>

</body>
</html><?php }} ?>