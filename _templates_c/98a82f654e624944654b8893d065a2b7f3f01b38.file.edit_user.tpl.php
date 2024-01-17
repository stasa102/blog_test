<?php /* Smarty version Smarty-3.1.13, created on 2018-10-15 16:57:44
         compiled from "/Users/milos/htdocs/blog_test/_templates/admin/edit_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7313880055bc4aae88798c2-65985013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98a82f654e624944654b8893d065a2b7f3f01b38' => 
    array (
      0 => '/Users/milos/htdocs/blog_test/_templates/admin/edit_user.tpl',
      1 => 1535752518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7313880055bc4aae88798c2-65985013',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bc4aae88c4e17_74859888',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc4aae88c4e17_74859888')) {function content_5bc4aae88c4e17_74859888($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h2 align="center">Edit User </h2>
<form id="form1" name="form1" method="post" action="admin_users.php">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5" class="edit_table">
    <tr>
      <td>ID:</td>
      <td><?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
</td>
    </tr>
    <tr>
      <td width="128">Username:</td>
      <td width="237"><input name="user[username]" type="text" id="user[username]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
" /></td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input name="user[password]" type="password" id="password" /></td>
    </tr>
    <tr>
      <td>Confirm Password: </td>
      <td><input name="user[password2]" type="password" id="password2" /></td>
    </tr>
    <tr>
      <td>Admin:</td>
      <td><input name="user[admin]" type="checkbox" id="user[admin]" value="1" <?php if (($_smarty_tpl->tpl_vars['user']->value->getAdmin())){?>checked="checked" <?php }?>/></td>
    </tr>
    
    <tr>
      <td colspan="2">
      
      <input type="submit" class="button_blue" name="Submit" value="Submit" onclick="if ($('#password').val() != $('#password2').val()) { console.log('password do not match'); $('#message').html('Passwords do not match.'); $('.a_message').show().delay(5000).fadeOut('slow'); return false;}"/>
      
        <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_users.php'" />
        <input name="Action" type="hidden" id="Action" value="edit_user" />
      <input name="user[id]" type="hidden" id="user[id]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
" /></td>
    </tr>
  </table>
  <p><br />
    </p>
</form>

<p>&nbsp;</p>
<?php echo $_smarty_tpl->getSubTemplate ("admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>