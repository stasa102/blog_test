{include file="admin/a_header.tpl"}
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
    {foreach from=$users item=user name=list}
  <tr class="table_row">
    <td>{$user->id}</td>
    <td>{$user->username}</td>
    <td>{if ($user->getAdmin())}yes{else}no{/if}</td>
    <td><a href="edit_user.php?id={$user->id}">edit</a></td>
    <td>      <input name="delete[]" type="checkbox" id="delete" value="{$user->id}" />    </td>
  </tr>
  {/foreach}
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


{include file="admin/a_footer.tpl"}