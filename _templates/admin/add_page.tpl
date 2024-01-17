{include file="admin/a_header.tpl"}

<script src="../../node_modules/ckeditor/ckeditor.js"></script>

<h2 align="center">Add  Page</h2>
        <form id="form1"  name="form1" method="post" action="admin_pages.php" class="edit_table post_form" style="">
          <div style="padding: 20px; display: flex; flex-direction: column">
            <label>Title:&nbsp;&nbsp;</label>
            <input name="page[title]" type="text" id="page[title]" value="" />
          </div>
          <div style="padding: 20px;">
            <label >Text:&nbsp;&nbsp;</label>
            <textarea id="page[text]" type="text" name="page[text]">
            </textarea>
          </div>
          <div style="padding: 20px">
            <label>Publish:</label>
            <input class="add_page_checkbox" name="page[published]" type="checkbox" id="page[published]" value="1" style="" />
          </div>
          <div style="padding: 20px">
            <input type="submit" name="Submit" class="button_blue" value="Submit"/>
            <input type="button" name="Submit2" value="Cancel" onclick="javascript:document.location='admin_pages.php'" />
            <input name="Action" type="hidden" id="Action" value="add_page" />
          </div>
        </form>
        
        <script>
                CKEDITOR.replace( 'page[text]' );
        </script>
{include file="admin/a_footer.tpl"}