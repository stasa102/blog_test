{include file="admin/a_header.tpl"}
<h2 align="center">Edit User </h2>
<form id="form1" name="form1" method="post" action="admin_users.php">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5" class="edit_table">
    <tr>
      <td>ID:</td>
      <td>{$user->id}</td>
    </tr>
    <tr>
      <td width="128">Username:</td>
      <td width="237"><input name="user[username]" type="text" id="user[username]" value="{$user->username}" /></td>
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
      <td><input name="user[admin]" type="checkbox" id="user[admin]" value="1" {if ($user->getAdmin()) }checked="checked" {/if}/></td>
    </tr>
    
    <tr>
      <td colspan="2">
      {literal}
      <input type="submit" class="button_blue" name="Submit" value="Submit" onclick="if ($('#password').val() != $('#password2').val()) { console.log('password do not match'); $('#message').html('Passwords do not match.'); $('.a_message').show().delay(5000).fadeOut('slow'); return false;}"/>
      {/literal}
        <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_users.php'" />
        <input name="Action" type="hidden" id="Action" value="edit_user" />
      <input name="user[id]" type="hidden" id="user[id]" value="{$user->id}" /></td>
    </tr>
  </table>
  <p><br />
    </p>
</form>

<p>&nbsp;</p>
{include file="admin/a_footer.tpl"}