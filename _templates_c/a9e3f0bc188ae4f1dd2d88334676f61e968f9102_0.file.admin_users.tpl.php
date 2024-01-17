<?php
/* Smarty version 4.3.4, created on 2024-01-16 13:15:28
  from '/var/www/blog_test/_templates/admin/admin_users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a681708056b0_76982671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9e3f0bc188ae4f1dd2d88334676f61e968f9102' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/admin_users.tpl',
      1 => 1705410902,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a681708056b0_76982671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div align="center">
  <form id="form1" name="form1" method="post" action="">
  
  
  <table width="400" border="0" align="center">
    <tr>
      <td colspan="2"><div align="left">[ <a href="add_user.php">add</a>  ]</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class="table_header" >
      <td width="45">id</td>
      <td width="226">username</td>
      <td width="122">admin</td>
      <td width="70" class="td_edit">edit</td>
      <td width="63" class="td_delete">delete</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, NULL, 'list', array (
));
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
  <tr class="table_row">
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
    <td><?php if (($_smarty_tpl->tpl_vars['user']->value->getAdmin())) {?>yes<?php } else { ?>no<?php }?></td>
    <td><a href="edit_user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">edit</a></td>
    <td>      <input name="delete[]" type="checkbox" id="delete" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" />    </td>
  </tr>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2"><div align="right">
      <input name="Action" type="hidden" id="Action" value="delete" />
      <input type="submit" class="button_red" name="button" id="button" value="Delete selected" />
    </div></td>
    </tr>
  </table>
  </form>
</div>


<?php $_smarty_tpl->_subTemplateRender("file:admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
