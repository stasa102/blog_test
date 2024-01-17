<?php
/* Smarty version 4.3.4, created on 2024-01-17 15:07:33
  from '/var/www/blog_test/_templates/admin/admin_pages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a7ed35c58f34_50463658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e27f10d8b5c0d9f6a5d452e16e80de221425ac3a' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/admin_pages.tpl',
      1 => 1705504046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a7ed35c58f34_50463658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div align="center">
  <form id="form1" name="form1" method="post" action="">
  
  
  <table width="400" border="0" align="center">
    <tr>
      <td colspan="2"><div align="left">[ <a href="add_page.php">add</a>  ]</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class="table_header" >
      <td width="45">id</td>
      <td width="226">title</td>
      <td width="226">text</td>
      <td width="122">published</td>
      <td width="226">time_published</td>
      <td width="226">time_created</td>
      <td width="226">sort_order</td>
      <td width="70" class="td_edit">edit</td>
      <td width="63" class="td_delete">delete</td>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pages']->value, 'page', false, NULL, 'list', array (
));
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
  <tr class="table_row">
    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->title;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->text;?>
</td>
    <td><?php if (($_smarty_tpl->tpl_vars['page']->value->published)) {?>yes<?php } else { ?>no<?php }?></td>
    <td><?php if (($_smarty_tpl->tpl_vars['page']->value->published) == '1') {?> <?php echo ($_smarty_tpl->tpl_vars['page']->value->time_published);?>
 <?php } else { ?> not published yet<?php }?></td>
    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->time_created;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['page']->value->sort_order;?>
</td>

    <td><a href="edit_page.php?id=<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
">edit</a></td>
    <td>      <input name="delete[]" type="checkbox" id="delete" value="<?php echo $_smarty_tpl->tpl_vars['page']->value->id;?>
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
