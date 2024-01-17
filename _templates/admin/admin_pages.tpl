{include file="admin/a_header.tpl"}

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
    {foreach from=$pages item=page name=list}
  <tr class="table_row">
    <td>{$page->id}</td>
    <td>{$page->title}</td>
    <td>{$page->text}</td>
    <td>{if ($page->published)}yes{else}no{/if}</td>
    <td>{if ($page->published) == '1'} {($page->time_published)} {else} not published yet{/if}</td>
    <td>{$page->time_created}</td>
    <td>{$page->sort_order}</td>

    <td><a href="edit_page.php?id={$page->id}">edit</a></td>
    <td>      <input name="delete[]" type="checkbox" id="delete" value="{$page->id}" />    </td>
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