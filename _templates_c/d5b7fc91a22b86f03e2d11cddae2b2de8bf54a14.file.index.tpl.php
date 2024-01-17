<?php /* Smarty version Smarty-3.1.13, created on 2018-10-15 16:56:49
         compiled from "/Users/milos/htdocs/blog_test/_templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16095831665bc4aab19a9424-69129640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b7fc91a22b86f03e2d11cddae2b2de8bf54a14' => 
    array (
      0 => '/Users/milos/htdocs/blog_test/_templates/index.tpl',
      1 => 1535751032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16095831665bc4aab19a9424-69129640',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bc4aab1a104a7_26376005',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc4aab1a104a7_26376005')) {function content_5bc4aab1a104a7_26376005($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</div>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>