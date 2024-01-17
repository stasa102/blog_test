<?php /* Smarty version Smarty-3.1.13, created on 2018-10-15 17:29:43
         compiled from "/Users/milos/htdocs/blog_test/_templates/admin/add_user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8616435515bc4b26763e774-55715079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1275a3929204a65e0818e021db2de6fdaac9a724' => 
    array (
      0 => '/Users/milos/htdocs/blog_test/_templates/admin/add_user.tpl',
      1 => 1535752596,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8616435515bc4b26763e774-55715079',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5bc4b26768d7a0_73945911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bc4b26768d7a0_73945911')) {function content_5bc4b26768d7a0_73945911($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
<?php echo $_smarty_tpl->getSubTemplate ("admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>