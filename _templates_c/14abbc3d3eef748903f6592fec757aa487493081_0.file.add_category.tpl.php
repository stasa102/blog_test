<?php
/* Smarty version 4.3.4, created on 2024-01-17 11:15:21
  from '/var/www/blog_test/_templates/categories/add_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a7b6c9bde340_83170360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14abbc3d3eef748903f6592fec757aa487493081' => 
    array (
      0 => '/var/www/blog_test/_templates/categories/add_category.tpl',
      1 => 1705423761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a7b6c9bde340_83170360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 align="center">Add category</h2>
<form id="form1" name="form1" method="post" action="categories.php">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5" class="edit_table">
    <tr>
      <td width="128">Name:</td>
      <td width="237"><input name="category[name]" type="text" id="category[name]" value="" /></td>
    </tr>
    <tr>
      <td>Publish:</td>
      <td><input name="category[published]" type="checkbox" id="category[published]" value="1" /></td>
    </tr>
    
    <tr>
      <td colspan="2">
      <input type="submit" name="Submit" class="button_blue" value="Submit" onclick=""/>
        <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='categories.php'" />
        <input name="Action" type="hidden" id="Action" value="add_category" /></td>
    </tr>
  </table>
  <p><br />
    </p>
</form>

<p>&nbsp;</p>
<?php $_smarty_tpl->_subTemplateRender("file:admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
