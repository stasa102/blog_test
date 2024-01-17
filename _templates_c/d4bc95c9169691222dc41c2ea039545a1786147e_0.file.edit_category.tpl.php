<?php
/* Smarty version 4.3.4, created on 2024-01-17 15:58:15
  from '/var/www/blog_test/_templates/admin/edit_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a7f917da58b9_40800504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4bc95c9169691222dc41c2ea039545a1786147e' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/edit_category.tpl',
      1 => 1705500302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a7f917da58b9_40800504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 align="center">Edit Category</h2>
<form id="form1" name="form1" method="post" action="admin_categories.php">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5" class="edit_table">
    <tr>
      <td>ID:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
</td>
    </tr>
    <tr>
      <td width="128">Name:</td>
      <td width="237"><input name="category[name]" type="text" id="category[name]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->name;?>
" /></td>
    </tr>
    <tr>
      <td>Publish:</td>
      <td><input name="category[published]" type="checkbox" id="category[published]" value="1" <?php if (($_smarty_tpl->tpl_vars['category']->value->getCategoryPublishedInfo())) {?>checked="checked" <?php }?>/></td>
    </tr>
    
    <tr>
      <td colspan="2">
      
      <input type="submit" class="button_blue" name="Submit" value="Submit" />
      
        <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_categories.php'" />
        <input name="Action" type="hidden" id="Action" value="edit_category" />
      <input name="category[id]" type="hidden" id="category[id]" value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
" /></td>
    </tr>
  </table>
  <p><br />
    </p>
</form>

<p>&nbsp;</p>
<?php $_smarty_tpl->_subTemplateRender("file:admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
