<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:21:40
  from '/var/www/blog_test/_templates/admin/admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55b948154a1_75533395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1373971a23f159c07031429e05013921ed0ec8b' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/admin.tpl',
      1 => 1534159688,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a55b948154a1_75533395 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table width="100%" border="0" cellspacing="5" cellpadding="5">
  <tr>
    <td><p>&nbsp;</p>
	</td>
  </tr>
</table>


<?php $_smarty_tpl->_subTemplateRender("file:admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
