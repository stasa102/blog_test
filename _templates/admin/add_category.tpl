{include file="admin/a_header.tpl"}
<h2 align="center">Add  Category</h2>
<form id="form1" name="form1" method="post" action="admin_categories.php">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5" class="edit_table">
    <tr>
      <td width="128">Name:</td>
      <td width="237"><input name="category[name]" type="text" id="category[name]" value="" /></td>
    </tr>
    <tr>
      <td>Publish:</td>
      <td><input name="category[published]" type="checkbox" id="category[published]" value="1" /></td>
    </tr>
    
    <tr>
      <td colspan="2">
      <input type="submit" name="Submit" class="button_blue" value="Submit"/>
        <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_categories.php'" />
        <input name="Action" type="hidden" id="Action" value="add_category" /></td>
    </tr>
  </table>
  <p><br />
    </p>
</form>

<p>&nbsp;</p>
{include file="admin/a_footer.tpl"}