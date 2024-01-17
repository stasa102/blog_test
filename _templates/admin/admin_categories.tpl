{include file="admin/a_header.tpl"}

<div align="center">
  <form id="form1" name="form1" method="post" action="">
  
  
  <table width="400" border="0" align="center">
    <tr>
      <td colspan="2"><div align="left">[ <a href="add_category.php">add</a>  ]</div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class="table_header" >
      <td width="45">id</td>
      <td width="226">name</td>
      <td width="122">published</td>
      <td width="70" class="td_edit">edit</td>
      <td width="63" class="td_delete">delete</td>
    </tr>
    {foreach from=$categories item=category name=list}
  <tr class="table_row">
    <td>{$category->id}</td>
    <td>{$category->name}</td>
    <td>{if ($category->getCategoryPublishedInfo())}yes{else}no{/if}</td>
    <td><a href="edit_category.php?id={$category->id}">edit</a></td>
    <td>      <input name="delete[]" type="checkbox" id="delete" value="{$category->id}" />    </td>
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