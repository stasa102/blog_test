<?php
/* Smarty version 4.3.4, created on 2024-01-16 10:32:55
  from '/var/www/blog_test/_templates/admin/add_user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a65b57c39145_53924715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7d0ecc64cb9bbaecdde8205eff415c8254bfd1f' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/add_user.tpl',
      1 => 1535752596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a65b57c39145_53924715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h2 align="center">Add User </h2>
<form id="form1" name="form1" method="post" action="admin_users.php">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5" class="edit_table">
    <tr>
      <td width="128">Username:</td>
      <td width="237"><input name="user[username]" type="text" id="user[username]" value="" /></td>
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
      <td><input name="user[admin]" type="checkbox" id="user[admin]" value="1" /></td>
    </tr>
    
    <tr>
      <td colspan="2">
      	
      <input type="submit" name="Submit" class="button_blue" value="Submit" onclick="if ($('#password').val() != $('#password2').val()) { console.log('password do not match'); $('#message').html('Passwords do not match.'); $('.a_message').show().delay(5000).fadeOut('slow'); return false;}"/>
      
        <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_users.php'" />
        <input name="Action" type="hidden" id="Action" value="add_user" /></td>
    </tr>
  </table>
  <p><br />
    </p>
</form>

<p>&nbsp;</p>
<?php $_smarty_tpl->_subTemplateRender("file:admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
