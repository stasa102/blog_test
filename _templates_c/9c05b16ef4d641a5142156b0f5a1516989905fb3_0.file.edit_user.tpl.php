<?php
/* Smarty version 4.3.4, created on 2024-01-15 16:40:03
  from '/var/www/blog_test/_templates/admin/edit_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a55fe375c745_59186895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c05b16ef4d641a5142156b0f5a1516989905fb3' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/edit_user.tpl',
      1 => 1535752518,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a55fe375c745_59186895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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
      <td><input name="user[admin]" type="checkbox" id="user[admin]" value="1" <?php if (($_smarty_tpl->tpl_vars['user']->value->getAdmin())) {?>checked="checked" <?php }?>/></td>
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
<?php $_smarty_tpl->_subTemplateRender("file:admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
