<?php
/* Smarty version 4.3.4, created on 2024-01-17 18:24:17
  from '/var/www/blog_test/_templates/admin/add_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a81b51665d79_41026149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f4b248251552ce81367ed12157334f8f7a9fea' => 
    array (
      0 => '/var/www/blog_test/_templates/admin/add_page.tpl',
      1 => 1705515574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/a_header.tpl' => 1,
    'file:admin/a_footer.tpl' => 1,
  ),
),false)) {
function content_65a81b51665d79_41026149 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:admin/a_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php echo '<script'; ?>
 src="../../node_modules/ckeditor/ckeditor.js"><?php echo '</script'; ?>
>

<h2 align="center">Add  Page</h2>
        <form id="form1"  name="form1" method="post" action="admin_pages.php" class="edit_table post_form" style="">
          <div style="padding: 20px; display: flex; flex-direction: column">
            <label>Title:&nbsp;&nbsp;</label>
            <input name="page[title]" type="text" id="page[title]" value="" />
          </div>
          <div style="padding: 20px;">
            <label >Text:&nbsp;&nbsp;</label>
            <textarea id="page[text]" type="text" name="page[text]"  >
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
        
        <?php echo '<script'; ?>
>
                CKEDITOR.replace( 'page[text]' );
        <?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:admin/a_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
