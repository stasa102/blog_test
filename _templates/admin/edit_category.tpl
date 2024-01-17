{include file="admin/a_header.tpl"}
<h2 align="center">Edit Category</h2>
<form id="form1" name="form1" method="post" action="admin_categories.php">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5" class="edit_table">
    <tr>
      <td>ID:</td>
      <td>{$category->id}</td>
    </tr>
    <tr>
      <td width="128">Name:</td>
      <td width="237"><input name="category[name]" type="text" id="category[name]" value="{$category->name}" /></td>
    </tr>
    <tr>
      <td>Publish:</td>
      <td><input name="category[published]" type="checkbox" id="category[published]" value="1" {if ($category->getCategoryPublishedInfo()) }checked="checked" {/if}/></td>
    </tr>
    
    <tr>
      <td colspan="2">
      {literal}
      <input type="submit" class="button_blue" name="Submit" value="Submit" />
      {/literal}
        <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_categories.php'" />
        <input name="Action" type="hidden" id="Action" value="edit_category" />
      <input name="category[id]" type="hidden" id="category[id]" value="{$category->id}" /></td>
    </tr>
  </table>
  <p><br />
    </p>
</form>

<p>&nbsp;</p>
{include file="admin/a_footer.tpl"}