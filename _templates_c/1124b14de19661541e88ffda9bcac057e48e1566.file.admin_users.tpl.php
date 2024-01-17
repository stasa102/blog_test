<?php /* Smarty version Smarty-3.1.13, created on 2018-10-15 16:57:42
         compiled from "/Users/milos/htdocs/blog_test/_templates/admin/admin_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17722825975bc4aae6a14a89-80012475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1124b14de19661541e88ffda9bcac057e48e1566' => 
    array (
      0 => '/Users/milos/htdocs/blog_test/_templates/admin/admin_users.tpl',
      1 => 1535752624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17722825975bc4aae6a14a89-80012475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bc4aae6a6c363_54499879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc4aae6a6c363_54499879')) {function content_5bc4aae6a6c363_54499879($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
    <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
  <tr class="table_row">
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
    <td><?php if (($_smarty_tpl->tpl_vars['user']->value->getAdmin())){?>yes<?php }else{ ?>no<?php }?></td>
    <td><a href="edit_user.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">edit</a></td>
    <td>      <input name="delete[]" type="checkbox" id="delete" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" />    </td>
  </tr>
  <?php } ?>
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


<?php echo $_smarty_tpl->getSubTemplate ("admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>