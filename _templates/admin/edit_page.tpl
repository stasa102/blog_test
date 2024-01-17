{include file="admin/a_header.tpl"}
<script src="../../node_modules/ckeditor/ckeditor.js"></script>

<h2 align="center">Edit Category</h2>
{* <form id="form1" name="form1" method="post" action="admin_pages.php">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="5" class="edit_table">
    <tr>
      <td>ID:</td>
      <td>{$page->id}</td>
    </tr>
    <tr>
      <td width="128">Title:</td>
      <td width="237"><input name="page[title]" type="text" id="page[title]" value="{$page->title}" /></td>
    </tr>
    <tr>
      <td width="128">Text:</td>
      <td width="237"><input name="page[text]" type="text" id="page[text]" value="{$page->text}" /></td>
    </tr>
    <tr>
      <td width="128">Sort order</td>
      <td width="237"><input name="page[sort_order]" type="text" id="page[sort_order]" value="{$page->sort_order}" /></td>
    </tr>
    <tr>
      <td>Publish:</td>
      <td><input name="page[published]" type="checkbox" id="page[published]" value="1" {if ($page->published) }checked="checked" {/if}/></td>
    </tr>
    
    <tr>
      <td colspan="2">
      {literal}
      <!-- <input type="submit" class="button_blue" name="Submit" value="Submit" /> -->
      {/literal}
        <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_pages.php'" />
        <input name="Action" type="hidden" id="Action" value="edit_page" />
      <input name="page[id]" type="hidden" id="page[id]" value="{$page->id}" /></td>
    </tr>
  </table>
  <p><br />
    </p>
</form> *}



        <form id="form1"  name="form1" method="post" action="admin_pages.php" class="edit_table post_form" style="">
          <div style="padding: 20px; display: flex; flex-direction: column">
            <label>Title:&nbsp;&nbsp;</label>
            <input name="page[title]" type="text" id="page[title]" value="{$page->title}" />
          </div>
          <div style="padding: 20px;">
            <label >Text:&nbsp;&nbsp;</label>
            <textarea id="page[text]" type="text" name="page[text]" value="{$page->text}" >
            </textarea>
          </div>
          <div style="padding: 20px; display: flex; flex-direction: column">
            <label>Sort order:&nbsp;&nbsp;</label>
            <input name="page[sort_order]" type="text" id="page[sort_order]" value="{$page->sort_order}" />
          </div>
          <div style="padding: 20px">
            <label>Publish:</label>
            <input name="page[published]" type="checkbox" id="page[published]" value="1" style="" {if ($page->published) }checked="checked" {/if} />
          </div>
          <div style="padding: 20px">
            <input type="submit" name="Submit" class="button_blue" value="Submit"/>
            <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_pages.php'" />
            <input name="Action" type="hidden" id="Action" value="edit_page" />
          </div>
        </form>
        
        <script>
                CKEDITOR.replace( 'page[text]' );
        </script>

<p>&nbsp;</p>
{include file="admin/a_footer.tpl"}